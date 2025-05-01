<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTeamInfoRequest;
use App\Http\Requests\Admin\UpdateTeamInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\TeamInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class TeamInfoController extends AppBaseController
{
    /** @var TeamInfoRepository $teamInfoRepository*/
    private $teamInfoRepository;

    public function __construct(TeamInfoRepository $teamInfoRepo)
    {
        $this->teamInfoRepository = $teamInfoRepo;
    }

    /**
     * Display a listing of the TeamInfo.
     */
    public function index(Request $request)
    {
        $teamInfos = $this->teamInfoRepository->paginate(10);

        return view('admin.team_infos.index')
            ->with('teamInfos', $teamInfos);
    }

    /**
     * Show the form for creating a new TeamInfo.
     */
    public function create()
    {
        return view('admin.team_infos.create');
    }

    /**
     * Store a newly created TeamInfo in storage.
     */
    public function store(CreateTeamInfoRequest $request)
    {
        $input = $request->all();

        $input['image'] = $this->processImage($request->file('image'), 'teams_image');

        $teamInfo = $this->teamInfoRepository->create($input);

        Flash::success('Team Info saved successfully.');

        return redirect(route('admin.teamInfos.index'));
    }

    /**
     * Display the specified TeamInfo.
     */
    public function show($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        return view('admin.team_infos.show')->with('teamInfo', $teamInfo);
    }

    /**
     * Show the form for editing the specified TeamInfo.
     */
    public function edit($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        return view('admin.team_infos.edit')->with('teamInfo', $teamInfo);
    }

    /**
     * Update the specified TeamInfo in storage.
     */
    public function update($id, UpdateTeamInfoRequest $request)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        $input = $request->all();

        $input['image'] = $this->handleImageUpload($request->file('image'), $teamInfo['image'], 'teams_image');

        $teamInfo = $this->teamInfoRepository->update($input, $id);

        Flash::success('Team Info updated successfully.');

        return redirect(route('admin.teamInfos.index'));
    }

    /**
     * Remove the specified TeamInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        $this->teamInfoRepository->delete($id);

        Flash::success('團隊資訊已刪除');

        // 刪除圖片
        $this->deleteImage($teamInfo['image'], 'teams_image');

        return redirect(route('admin.teamInfos.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }


    // 刪除圖片
    function deleteImage($imagePath, $uploadDir)
    {
        if (!empty($imagePath) && File::exists(public_path('uploads/' . $imagePath))) {
            File::delete(public_path('uploads/' . $imagePath));
        }
        // 刪除圖片資料夾
        // $directory = public_path('uploads/images/' . $uploadDir);
        // if (is_dir($directory)) {
        //     File::deleteDirectory($directory);
        // }
    }
}
