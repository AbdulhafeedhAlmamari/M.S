<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('permissions')->insert([
    //         'id' => 1,
    //         'name' => 'add-post',
    //         'desc' => 'إضافة القسم'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 2,
    //         'name' => 'edit-post',
    //         'desc' => 'تعديل القسم'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 3,
    //         'name' => 'delete-post',
    //         'desc' => 'حذف القسم'
    //     ]);


    //     DB::table('permissions')->insert([
    //         'id' => 4,
    //         'name' => 'add-post',
    //         'desc' => 'إضافة مشرف'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 5,
    //         'name' => 'edit-post',
    //         'desc' => 'تعديل مشرف'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 6,
    //         'name' => 'delete-post',
    //         'desc' => 'حذف مشرف'
    //     ]);


    //     DB::table('permissions')->insert([
    //         'id' => 7,
    //         'name' => 'add-post',
    //         'desc' => 'إضافة تشغيل'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 8,
    //         'name' => 'edit-post',
    //         'desc' => 'تعديل تشغيل'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 9,
    //         'name' => 'delete-post',
    //         'desc' => 'حذف تشغيل'
    //     ]);


    //     DB::table('permissions')->insert([
    //         'id' => 10,
    //         'name' => 'add-post',
    //         'desc' => 'إضافة افراد'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 11,
    //         'name' => 'edit-post',
    //         'desc' => 'تعديل افراد'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 12,
    //         'name' => 'delete-post',
    //         'desc' => 'حذف افراد'
    //     ]);


    //     DB::table('permissions')->insert([
    //         'id' => 13,
    //         'name' => 'add-post',
    //         'desc' => 'إضافة العمليات'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 14,
    //         'name' => 'edit-post',
    //         'desc' => 'تعديل العمليات'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 15,
    //         'name' => 'delete-post',
    //         'desc' => 'حذف العمليات'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 16,
    //         'name' => 'add-user',
    //         'desc' => 'إضافة المستخدمين'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 17,
    //         'name' => 'edit-user',
    //         'desc' => 'تعديل بيانات المستخدمين'
    //     ]);

    //     DB::table('permissions')->insert([
    //         'id' => 18,
    //         'name' => 'delete-user',
    //         'desc' => 'حذف المستخدمين'
    //     ]);
    // }
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'create-section',
                'desc' => 'إنشاء القسم'
            ],
            [
                'id' => 2,
                'name' => 'read-section',
                'desc' => 'عرض القسم'
            ],
            [
                'id' => 3,
                'name' => 'update-section',
                'desc' => 'تحديث القسم'
            ],
            [
                'id' => 4,
                'name' => 'delete-section',
                'desc' => 'حذف القسم'
            ],
            [
                'id' => 5,
                'name' => 'create-supervisor',
                'desc' => 'إنشاء المشرف'
            ],
            [
                'id' => 6,
                'name' => 'read-supervisor',
                'desc' => 'عرض المشرف'
            ],
            [
                'id' => 7,
                'name' => 'update-supervisor',
                'desc' => 'تحديث المشرف'
            ],
            [
                'id' => 8,
                'name' => 'delete-supervisor',
                'desc' => 'حذف المشرف'
            ],
            [
                'id' => 9,
                'name' => 'create-operation',
                'desc' => 'إنشاء العملية'
            ],
            [
                'id' => 10,
                'name' => 'read-operation',
                'desc' => 'عرض العملية'
            ],
            [
                'id' => 11,
                'name' => 'update-operation',
                'desc' => 'تحديث العملية'
            ],
            [
                'id' => 12,
                'name' => 'delete-operation',
                'desc' => 'حذف العملية'
            ],
            [
                'id' => 13,
                'name' => 'create-individual',
                'desc' => 'إنشاء الفرد'
            ],
            [
                'id' => 14,
                'name' => 'read-individual',
                'desc' => 'عرض الفرد'
            ],
            [
                'id' => 15,
                'name' => 'update-individual',
                'desc' => 'تحديث الفرد'
            ],
            [
                'id' => 16,
                'name' => 'delete-individual',
                'desc' => 'حذف الفرد'
            ],
            [
                'id' => 17,
                'name' => 'create-process',
                'desc' => 'إنشاء العملية'
            ],
            [
                'id' => 18,
                'name' => 'read-process',
                'desc' => 'عرض العملية'
            ],
            [
                'id' => 19,
                'name' => 'update-process',
                'desc' => 'تحديث العملية'
            ],
            [
                'id' => 20,
                'name' => 'delete-process',
                'desc' => 'حذف العملية'
            ],
            [
                'id' => 21,
                'name' => 'create-user',
                'desc' => 'إنشاء المستخدم'
            ],
            [
                'id' => 22,
                'name' => 'read-user',
                'desc' => 'عرض المستخدم'
            ],
            [
                'id' => 23,
                'name' => 'update-user',
                'desc' => 'تحديث المستخدم'
            ],
            [
                'id' => 24,
                'name' => 'delete-user',
                'desc' => 'حذف المستخدم'
            ]
        ];

        foreach ($permissions as $permission) {
            $query = DB::table('permissions');
            $query->updateOrInsert(
                ['id' => $permission['id']],
                $permission
            );
        }
    }
}
