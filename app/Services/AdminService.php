<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class AdminService
{
    public static function AdminList(Request $request)
    {
        if($request->has('keywords')){
            $data = Admin::leftJoin('users', 'users.id', 'admins.user_id')->select('users.*', 'admins.*')
            ->where(function ($row) use ($request){
                    $row->where(function ($query) use ($request) {
                        $query->where('users.name', 'like', '%' . $request->keywords . '%')
                            ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
                    });
            })->paginate(10);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        }else{
            $data = Admin::paginate(10);
        }

      
        Paginator::useBootstrap();
        return $data;

    }


    public static function add($params)
    {
        // dd($params);
        // $username = $params['name'].rand(pow(10, 8 - 1), pow(10, 8) -1);
        DB::beginTransaction();
        // try {
            $inputUser['username'] = $params['username'];
            $inputUser['user_type'] = 'admin';
            $inputUser['name'] = $params['name'];
            $inputUser['gender'] = $params['gender'];
            $inputUser['password'] = Hash::make($params['password']);
            // if(isset($params['image_url'])){
            //     $inputUser['image_url'] = $params['image_url'];
            // }   
            if (isset($params['id'])) {
                // dd($params['id']);
                // dd($params);
                // $petugas =  Admin::find($params['id']);
                // dd($inputUser);
                // $petugas->update([]);
                // $user = $petugas->user()->update($inputUser);
                $user =  User::with('admin')->find($params['id']);
                // dd($user);
                // dd($inputUser);
                $user->update($inputUser);
                $petugas = $user->admin()->update([]);
            }else{
                $data = User::create($inputUser);
                $admin = $data->admin()->create([]);
            }
            DB::commit();
        //     return $data;
        // } catch (\Throwable $th) {
        //     DB::rollback();
        //     return $th;
        // }
    }
    // public static function AdminDetail($id)
    // {
    //     $data = Admin::with('user')->find($id);
    //     return $data;
    // }
    // public static function AdminEdit($id)
    // {
    //     $data = Admin::with('user')->find($id);
    //     return $data;
    // }

    public static function deleteAdmin($id)
    {
        $data = Admin::with('user')->find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}