<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],

            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',

                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'roles'          => 'Roles',
                    'social' => 'Social',
                    'total'          => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'first_name'   => 'First Name',
                            'last_name'    => 'Last Name',
                            'status'       => 'Status',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],
        'categories' => [
            'create'     => 'Create Category',
            'edit'       => 'Edit Category',
            'management' => 'Category Management',
            'title' => 'Category',

            'table' => [
                'title'          => 'Category',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],

        'subcategories' => [
            'create'     => 'Create Collection',
            'edit'       => 'Edit Collection',
            'management' => 'Collection Management',
            'title' => 'Collection',

            'table' => [
                'title'          => 'Collection',
                'category'       => 'Category',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'home_slider' => [
            'create'     => 'Create New Slide',
            'edit'       => 'Edit Slide',
            'management' => 'Slider Management',
            'title' => 'HomeSlider',

            'table' => [
                'type'           => 'Type',
                'image_video'    => 'Image/Video',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'styles' => [
            'create'     => 'Create Style',
            'edit'       => 'Edit Style',
            'management' => 'Style Management',
            'title' => 'Style',

            'table' => [
                'title'          => 'Style',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'materials' => [
            'create'     => 'Create Material',
            'edit'       => 'Edit Material',
            'management' => 'Material Management',
            'title' => 'Material',

            'table' => [
                'title'          => 'Material',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'weaves' => [
            'create'     => 'Create Weave',
            'edit'       => 'Edit Weave',
            'management' => 'Weave Management',
            'title' => 'Weave',

            'table' => [
                'title'          => 'Weave',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'colors' => [
            'create'     => 'Create Color',
            'edit'       => 'Edit Color',
            'management' => 'Color Management',
            'title' => 'Color',

            'table' => [
                'title'          => 'Color',
                'status'         => 'Status',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'pages' => [
            'create'     => 'Create Page',
            'edit'       => 'Edit Page',
            'management' => 'Page Management',
            'title' => 'Page',

            'table' => [
                'title'          => 'Page',
                'slug'           => 'Slug',
                'content'        => 'Content',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
        'reviews' => [
            'create'     => 'Create Review',
            'edit'       => 'Edit Review',
            'management' => 'Review Management',
            'title' => 'Review',

            'table' => [
                'title'          => 'Title',
                'star'           => 'Star',
                'content'        => 'Content',
                'createdat'      => 'Created At',
                'all'            => 'All',
                'product_name'   => 'Product'
            ],
        ],
        'subscriptions' => [
            'create'     => 'Create Subscription',
            'edit'       => 'Edit Subscription',
            'management' => 'Subscription Management',
            'title' => 'Subscription',

            'table' => [
                'id'             => 'ID',
                'email'          => 'Email',
                'createdat'      => 'Created At',
                'all'            => 'All'
            ],
        ],
        'stores' => [
            'create'     => 'Create Store',
            'edit'       => 'Edit Store',
            'management' => 'Store Management',
            'title' => 'Store',

            'table' => [
                'title'          => 'Store Name',
                'pobox'         => 'Zip Code',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],

        'mailinglists' => [
            'create'     => 'Create Mailing List',
            'edit'       => 'Edit Mailing List',
            'management' => 'Mailing List Management',
            'title' => 'Mailing List',

            'table' => [
                'firstname'      => 'First Name',
                'lastname'       => 'Last Name',
                'email'          => 'Email',
                'pobox'          => 'Zip Code',
                'createdat'      => 'Created At',
                'all'            => 'All',
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'macros' => [
            'country' => [
                'alpha'   => 'Country Alpha Codes',
                'alpha2'  => 'Country Alpha 2 Codes',
                'alpha3'  => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us'     => [
                    'us'       => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed'    => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
