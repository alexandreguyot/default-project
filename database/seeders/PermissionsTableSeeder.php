<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 25,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 26,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 27,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 28,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 29,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 30,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 31,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 32,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 33,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 34,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 35,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 36,
                'title' => 'product_create',
            ],
            [
                'id'    => 37,
                'title' => 'product_edit',
            ],
            [
                'id'    => 38,
                'title' => 'product_show',
            ],
            [
                'id'    => 39,
                'title' => 'product_delete',
            ],
            [
                'id'    => 40,
                'title' => 'product_access',
            ],
            [
                'id'    => 41,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 42,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 43,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 44,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 45,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 46,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 47,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 48,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 49,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 50,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 51,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 52,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 53,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 54,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 55,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 56,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 57,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 58,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 59,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 60,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 61,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 62,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 63,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 64,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 65,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 66,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 67,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 68,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 69,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 70,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 71,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 72,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 73,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 74,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 75,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 76,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 77,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 78,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 79,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 80,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 81,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 82,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 83,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 84,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 85,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 86,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 87,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 88,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 89,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 90,
                'title' => 'task_create',
            ],
            [
                'id'    => 91,
                'title' => 'task_edit',
            ],
            [
                'id'    => 92,
                'title' => 'task_show',
            ],
            [
                'id'    => 93,
                'title' => 'task_delete',
            ],
            [
                'id'    => 94,
                'title' => 'task_access',
            ],
            [
                'id'    => 95,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 96,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 97,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 98,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 99,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 100,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 101,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 102,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 103,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 104,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 105,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 106,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 107,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 108,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 109,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 110,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 111,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 112,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 113,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 114,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 115,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 116,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 117,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 118,
                'title' => 'course_create',
            ],
            [
                'id'    => 119,
                'title' => 'course_edit',
            ],
            [
                'id'    => 120,
                'title' => 'course_show',
            ],
            [
                'id'    => 121,
                'title' => 'course_delete',
            ],
            [
                'id'    => 122,
                'title' => 'course_access',
            ],
            [
                'id'    => 123,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 124,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 125,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 126,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 127,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 128,
                'title' => 'test_create',
            ],
            [
                'id'    => 129,
                'title' => 'test_edit',
            ],
            [
                'id'    => 130,
                'title' => 'test_show',
            ],
            [
                'id'    => 131,
                'title' => 'test_delete',
            ],
            [
                'id'    => 132,
                'title' => 'test_access',
            ],
            [
                'id'    => 133,
                'title' => 'question_create',
            ],
            [
                'id'    => 134,
                'title' => 'question_edit',
            ],
            [
                'id'    => 135,
                'title' => 'question_show',
            ],
            [
                'id'    => 136,
                'title' => 'question_delete',
            ],
            [
                'id'    => 137,
                'title' => 'question_access',
            ],
            [
                'id'    => 138,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 139,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 140,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 141,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 142,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 143,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 144,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 145,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 146,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 147,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 148,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 149,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 150,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 151,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 152,
                'title' => 'test_answer_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
