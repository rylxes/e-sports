<?php


namespace App\Traits;


use App\Models\AppModel;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

trait FilesTrait
{
    private $isFileSuccess = false;
    private $hasFile = false;


    protected function createUser(array $data, $role)
    {
        $array = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];
        $role = Role::findByName($role);
        $user = User::create($array);
        $user->assignRole($role);
        event(new Registered($user));
        return $user;
    }


    function uploadMultipleFile(Request $request, AppModel $file, $collection, $fileName)
    {
        $this->isFileSuccess = false;
        if (!empty($request->file($fileName))) {
            $this->deleteMultipleFile($file, $collection);
            $this->hasFile = true;
            try {
                $file->addMedia($request->file($fileName))
                    ->toMediaCollection($collection);
                $this->isFileSuccess = true;
                if (empty($file->media)) {
                    DB::rollBack();
                    return $this->sendError("There was an issue uploading your file");
                }
            } catch (\Throwable $exception) {
                //dd($exception->getMessage());
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
    }

    function uploadOneFile(Request $request, AppModel $file, $collection, $fileName)
    {
        $this->isFileSuccess = false;
        if (!empty($request->file($fileName))) {
            $this->deleteOneFile($file, $collection);
            $this->hasFile = true;
            try {
                $file->addMedia($request->file($fileName))
                    ->toMediaCollection($collection);
                $this->isFileSuccess = true;
                if (empty($file->media)) {
                    DB::rollBack();
                    return $this->sendError("There was an issue uploading your file");
                }
            } catch (\Throwable $exception) {
                //dd($exception->getMessage());
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
    }


    function deleteOneFile(AppModel $file, $collection)
    {
        try {
            $mediaItem = $file->getMedia($collection)->first();
            $file->deleteMedia($mediaItem);
            // $file->delete();
        } catch (\Exception $exception) {

        }
    }

    function deleteMultipleFile(AppModel $file, $collection)
    {
        try {
            $mediaItem = $file->getMedia($collection);
            foreach ($mediaItem as $eachMedial) {
                $file->deleteMedia($eachMedial);
            }
            // $file->delete();
        } catch (\Exception $exception) {

        }
    }
}
