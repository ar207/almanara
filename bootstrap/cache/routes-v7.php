<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveWizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/classic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveClassic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/initialize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.initialize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.content',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/select-disk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.select-disk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/paste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.paste',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.rename',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/thumbnails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.thumbnails',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.preview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.url',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/create-directory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-directory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/create-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/update-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.update-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/stream-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.stream-file',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/zip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.zip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/unzip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.unzip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/ckeditor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.ckeditor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tinymce' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tinymce5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/summernote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.summernote',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/fm-button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.fm-button',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/translations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JqFHbKKMsQJz6Sb2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminHome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminSearch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/find' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminFind',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterSettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterSettingsUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/languages/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterLanguageStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/languages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterLanguageUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/seo/repair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterSEORepair',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/mail/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mailSMTPCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/mail/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mailTest',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster-license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'licenseCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBanners',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/banners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersCreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/banners/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/banners/updateAll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersUpdateAll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSections',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/sections/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsCreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/sections/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmaster/sections/updateAll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsUpdateAll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settingsUpdateSiteInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Banners',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banners/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banners/updateAll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersUpdateAll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topics-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topics/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsPhotosUpload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topics-import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsImport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keditor-snippets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'keditorSnippets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keditor-save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'keditorSave',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/storeGroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsStoreGroup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmails/storeGroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsStoreGroup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmails/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/webmails/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsSearch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calendar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calendar/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarCreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calendar/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/calendar/updateAll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarUpdateAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/visitors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'visitors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersCreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/updateAll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersUpdateAll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsCreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/permissions/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions-links/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customLinksStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions-links/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customLinksUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/store/parent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parentMenusStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/file-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'FileManager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/files-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'FilesManager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/403' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'NoPermission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cache-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cacheClear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cache-cleared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cacheCleared',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'apiURL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/website/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yOy1G8zhAGbgE1Pz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/website/social' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bRPeAo5CuKKkKejW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/website/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::31FhUCvyQscwvmwA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8u0u31LqwpqpSaxY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UakEYatEmf9HKyrf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ksinyZ4XBs5wifCM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P7nc0XMiKm6gDzW4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bDw43iQbhJxg3YnR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8RkHog7ph1Vu6AI2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hRuEw3lIWwIbWZDQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteMap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/form-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'formSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribeSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orderSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactPageSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|dmin/(?|webmaster(?|/(?|translations/([^/]++)(?|/translations(?|(*:76)|/create(*:90)|(*:97))|(*:105))|languages/destroy/([^/]++)(*:140)|banners/(?|([^/]++)/(?|edit(*:175)|update(*:189))|destroy/([^/]++)(*:214))|sections/(?|([^/]++)/(?|edit(*:251)|update(*:265)|seo(*:276))|destroy/([^/]++)(*:301))|([^/]++)/fields(*:325))|\\-save(?:/([^/]++))?(*:354))|([^/]++)/fields/create(*:385)|webmaster/([^/]++)/fields/(?|store(*:427)|([^/]++)/(?|edit(*:451)|update(*:465))|destroy/([^/]++)(*:490)|updateAll(*:507))|banners/(?|create/([^/]++)(*:542)|([^/]++)/(?|edit(*:566)|update(*:580))|destroy(?:/([^/]++))?(*:610))|([^/]++)/(?|categories(?|(*:644)|/(?|create(*:662)|store(*:675)|([^/]++)/(?|edit(*:699)|update(*:713)|seo(*:724))|destroy(?:/([^/]++))?(*:754)|updateAll(*:771)))|specialities(?|(*:796)|/(?|create(*:814)|store(*:827)|([^/]++)/(?|edit(*:851)|update(*:865)|seo(*:876))|destroy(?:/([^/]++))?(*:906)|updateAll(*:923)))|topics(?|(*:942)|/(?|create(*:960)|store(*:973)|([^/]++)/(?|edit(*:997)|clone(*:1010)|update(*:1025))|destroy(?:/([^/]++))?(*:1056)|updateAll(*:1074)|([^/]++)/(?|seo(*:1098)|photos(?|(*:1116)|/(?|([^/]++)/destroy(*:1145)|updateAll(*:1163)))|files(?|(*:1182)|/(?|create(*:1201)|store(*:1215)|([^/]++)/(?|edit(*:1240)|update(*:1255))|destroy/([^/]++)(*:1281)|updateAll(*:1299)))|related(*:1317))))|view/([^/]++)(*:1342)|print(*:1356))|relatedLoad/([^/]++)(*:1386)|([^/]++)/topics/([^/]++)/(?|related/(?|create(*:1440)|store(*:1454)|destroy/([^/]++)(*:1479)|updateAll(*:1497))|comments(?|(*:1518)|/(?|create(*:1537)|store(*:1551)|([^/]++)/(?|edit(*:1576)|update(*:1591))|destroy/([^/]++)(*:1617)|updateAll(*:1635)))|maps(?|(*:1653)|/(?|create(*:1672)|store(*:1686)|([^/]++)/(?|edit(*:1711)|update(*:1726))|destroy/([^/]++)(*:1752)|updateAll(*:1770))))|keditor(?:/([^/]++))?(*:1803)|c(?|ontacts(?|/(?|([^/]++)/(?|editGroup(*:1851)|updateGroup(*:1871))|destroyGroup/([^/]++)(*:1902))|(?:/([^/]++))?(*:1926)|/(?|s(?|tore(*:1947)|earch(*:1961))|([^/]++)/(?|edit(*:1987)|update(*:2002))|destroy/([^/]++)(*:2028)|updateAll(*:2046)))|alendar/(?|([^/]++)/(?|edit(*:2084)|update(*:2099))|destroy/([^/]++)(*:2125)|([^/]++)/extend(*:2149)))|webmails(?|/(?|([^/]++)/(?|editGroup(*:2196)|updateGroup(*:2216))|destroyGroup/([^/]++)(*:2247)|([^/]++)/edit(*:2269))|(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?(*:2335)|/(?|([^/]++)/update(*:2363)|destroy/([^/]++)(*:2388)|updateAll(*:2406)))|ip(?|(?:/([^/]++))?(*:2436)|/search(*:2452))|analytics(?|/([^/]++)(*:2483)|(?:/([^/]++))?(*:2506))|users/(?|([^/]++)/(?|edit(*:2541)|update(*:2556))|destroy/([^/]++)(*:2582)|permissions/(?|([^/]++)/(?|edit(*:2622)|update(*:2637)|save(*:2650))|destroy/([^/]++)(*:2676)))|permissions\\-links/(?|edit(?:/([^/]++)(?:/([^/]++))?)?(*:2741)|destroy(?:/([^/]++)(?:/([^/]++))?)?(*:2785)|list(?:/([^/]++))?(*:2812))|menus(?|/(?|parent/([^/]++)/edit(*:2854)|([^/]++)/update/([^/]++)(*:2887)|parent/destroy/([^/]++)(*:2919))|(?:/([^/]++))?(*:2943)|/(?|create(?:/([^/]++))?(*:2976)|store(?:/([^/]++))?(*:3004)|([^/]++)/(?|edit(?:/([^/]++))?(*:3043)|update(*:3058))|destroy/([^/]++)(*:3084)|updateAll(*:3102))))|pi/v1/(?|website/(?|info(?:/([^/]++))?(*:3152)|contacts(?:/([^/]++))?(*:3183)|style(?:/([^/]++))?(*:3211))|menu/([^/]++)(?:/([^/]++))?(*:3248)|banners/([^/]++)(?:/([^/]++))?(*:3287)|section/([^/]++)(?:/([^/]++))?(*:3326)|categor(?|ies/([^/]++)(?:/([^/]++))?(*:3371)|y/([^/]++)/page/([^/]++)/count(?:/([^/]++)(?:/([^/]++))?)?(*:3438))|topic(?|s/([^/]++)/page/([^/]++)/count(?:/([^/]++)(?:/([^/]++))?)?(*:3514)|/(?|fi(?|elds/([^/]++)(?:/([^/]++))?(*:3559)|le(?|s/([^/]++)(?:/([^/]++))?(*:3597)|/([^/]++)(?:/([^/]++))?(*:3629)))|photo(?|s/([^/]++)(?:/([^/]++))?(*:3672)|/([^/]++)(?:/([^/]++))?(*:3704))|map(?|s/([^/]++)(?:/([^/]++))?(*:3744)|/([^/]++)(?:/([^/]++))?(*:3776))|comment(?|s/([^/]++)(?:/([^/]++))?(*:3820)|/([^/]++)(?:/([^/]++))?(*:3852))|related/([^/]++)(?:/([^/]++))?(*:3892)|([^/]++)(?:/([^/]++))?(*:3923)))|user/([^/]++)/topics/page/([^/]++)/count(?:/([^/]++)(?:/([^/]++))?)?(*:4002)))|/l(?|ang/([^/]++)(*:4030)|ocale/([^/]++)(*:4053))|/([^/]++)/404(*:4076)|/oauth/([^/]++)(?|(*:4103)|/callback(*:4121))|/admin/password/reset/([^/]++)(*:4161)|/([^/]++)/(?|sitemap(*:4190)|contact(*:4206))|/([^/]++)?(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?)?(*:4296))/?$}sDu',
    ),
    3 => 
    array (
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.index',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.create',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      97 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.store',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterLanguageDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterBannersDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsSEOUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'WebmasterSectionsDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFields',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterSettingsSaved',
            'tab' => NULL,
          ),
          1 => 
          array (
            0 => 'tab',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'field_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'field_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'field_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmasterFieldsUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersCreate',
          ),
          1 => 
          array (
            0 => 'sectionId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BannersDestroy',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesSEOUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesDestroy',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialities',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesSEOUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesDestroy',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialitiesUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topics',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsClone',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsDestroy',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsSEOUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsPhotosEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsPhotosDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'photo_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsPhotosUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFiles',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'file_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'file_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'file_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsFilesUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelated',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicView',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsPrint',
          ),
          1 => 
          array (
            0 => 'webmasterId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelatedLoad',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelatedCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelatedStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelatedDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'related_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsRelatedUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsComments',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'comment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'comment_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'comment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsCommentsUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMaps',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsCreate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsStore',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsEdit',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'map_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsUpdate',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'map_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsDestroy',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
            2 => 'map_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topicsMapsUpdateAll',
          ),
          1 => 
          array (
            0 => 'webmasterId',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'keditor',
            'topic_id' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsEditGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsUpdateGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsDestroyGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts',
            'group_id' => NULL,
          ),
          1 => 
          array (
            0 => 'group_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsStore',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsSearch',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2046 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactsUpdateAll',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendarExtend',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsEditGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsUpdateGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsDestroyGroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmails',
            'group_id' => NULL,
            'wid' => NULL,
            'stat' => NULL,
            'contact_email' => NULL,
          ),
          1 => 
          array (
            0 => 'group_id',
            1 => 'wid',
            2 => 'stat',
            3 => 'contact_email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webmailsUpdateAll',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'visitorsIP',
            'ip_code' => NULL,
          ),
          1 => 
          array (
            0 => 'ip_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'visitorsSearch',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analyticsFilter',
          ),
          1 => 
          array (
            0 => 'stat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics',
            'stat' => NULL,
          ),
          1 => 
          array (
            0 => 'stat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usersDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsHomePageUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissionsDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customLinksEdit',
            'id' => NULL,
            'p_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'p_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customLinksDestroy',
            'id' => NULL,
            'p_id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'p_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customLinksList',
            'p_id' => NULL,
          ),
          1 => 
          array (
            0 => 'p_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parentMenusEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parentMenusUpdate',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'ParentMenuId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parentMenusDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus',
            'ParentMenuId' => NULL,
          ),
          1 => 
          array (
            0 => 'ParentMenuId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusCreate',
            'ParentMenuId' => NULL,
          ),
          1 => 
          array (
            0 => 'ParentMenuId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusStore',
            'ParentMenuId' => NULL,
          ),
          1 => 
          array (
            0 => 'ParentMenuId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusEdit',
            'ParentMenuId' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'ParentMenuId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusDestroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menusUpdateAll',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jDJH3QaMaRExUkz3',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WrEoShRq7z99vPed',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hoq7loNVpucwTnzl',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Js9NsCutTyy9djM',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'menu_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OOMPolxxYW1P2NAj',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'group_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xqDzsoKLDqk3UcQ7',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'section_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nrPTughalCGWOkR3',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'section_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W8cEUAxMH6zI9ncU',
            'page_number' => NULL,
            'topics_count' => NULL,
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'cat_id',
            1 => 'page_number',
            2 => 'topics_count',
            3 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wNf8kFp0RDcdOnbg',
            'page_number' => NULL,
            'topics_count' => NULL,
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'section_id',
            1 => 'page_number',
            2 => 'topics_count',
            3 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cbzq4Ff8NC8SK8JN',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fb4gfx1feDpXHMDT',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4weDtc1ExLurwCiB',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'file_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v3rFlqvJVoOHw8cl',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4OAQ7N22mm9zujBq',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'photo_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8R33tPqSZayHLa2A',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fZFZMUcI8aHgyquQ',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'map_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::emSdjk84pS3gNmep',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VFj6fu2YZ5SVTk4E',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'comment_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RTbCUwYz8ya52yyh',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gUQi8UDmkjY3k44F',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rvWsMVNwJi5fb1r',
            'page_number' => NULL,
            'topics_count' => NULL,
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'user_id',
            1 => 'page_number',
            2 => 'topics_count',
            3 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'langChange',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'localeChange',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'NotFound',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.oauth',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.callback',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteMapByLang',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactPageByLang',
            'lang' => NULL,
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontendRoute',
            'part1' => NULL,
            'part2' => NULL,
            'part3' => NULL,
            'part4' => NULL,
            'part5' => NULL,
            'part6' => NULL,
          ),
          1 => 
          array (
            0 => 'part1',
            1 => 'part2',
            2 => 'part3',
            3 => 'part4',
            4 => 'part5',
            5 => 'part6',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'LaravelInstaller::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environment',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentWizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveWizard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveWizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentClassic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/classic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveClassic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveClassic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::requirements',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::permissions',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::overview',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/final',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'LaravelUpdater::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.initialize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/initialize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.initialize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.content',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.select-disk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/select-disk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.select-disk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.paste' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.paste',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.rename' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.rename',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.thumbnails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/thumbnails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.thumbnails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.preview',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.url' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.url',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.create-directory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-directory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-directory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.create-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.update-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/update-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.update-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.stream-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/stream-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.stream-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.zip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/zip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.zip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.unzip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/unzip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.unzip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.ckeditor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/ckeditor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.ckeditor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tinymce' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tinymce5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce5',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.summernote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/summernote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.summernote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.fm-button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/fm-button',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.fm-button',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/translations',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/translations/create',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/translations',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/translations/{language}/translations',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/translations/{language}',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/translations/{language}/translations/create',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/translations/{language}/translations',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JqFHbKKMsQJz6Sb2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008510000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JqFHbKKMsQJz6Sb2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminHome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'adminHome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminSearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@search',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@search',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'adminSearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminFind' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/find',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@find',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@find',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'adminFind',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterSettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterSettingsSaved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster-save/{tab?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@saved',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@saved',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterSettingsSaved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterSettingsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterSettingsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterLanguageStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/languages/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterLanguageStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterLanguageUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/languages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterLanguageUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterLanguageDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/languages/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@language_destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterLanguageDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterSEORepair' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/seo/repair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@seo_repair',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@seo_repair',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterSEORepair',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mailSMTPCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/mail/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@mail_smtp_check',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@mail_smtp_check',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'mailSMTPCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mailTest' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/mail/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@mail_test',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSettingsController@mail_test',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'mailTest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'licenseCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster-license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterLicenseController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterLicenseController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'licenseCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBanners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBanners',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/banners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/banners/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/banners/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/banners/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/banners/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterBannersUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/banners/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterBannersController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterBannersUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSections',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/sections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/sections/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/sections/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsSEOUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/sections/{id}/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@seo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@seo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsSEOUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/sections/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'WebmasterSectionsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/sections/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'WebmasterSectionsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFields' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@webmasterFields',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@webmasterFields',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFields',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/fields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsCreate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsStore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsStore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields/{field_id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsEdit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsEdit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields/{field_id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsUpdate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsUpdate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields/destroy/{field_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmasterFieldsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmaster/{webmasterId}/fields/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmasterSectionsController@fieldsUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmasterFieldsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settingsUpdateSiteInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@updateSiteInfo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@updateSiteInfo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'settingsUpdateSiteInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Banners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'Banners',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banners/create/{sectionId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banners/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banners/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banners/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banners/destroy/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BannersUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banners/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BannersController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BannersController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'BannersUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/categories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/categories/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/categories/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesSEOUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/categories/{id}/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@seo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@seo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesSEOUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/categories/destroy/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/categories/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/specialities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/specialities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/specialities/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/specialities/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/specialities/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesSEOUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/specialities/{id}/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@seo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@seo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesSEOUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/specialities/destroy/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specialitiesUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/specialities/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SpecialityController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'specialitiesUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topics-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@list',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@list',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicView' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@view',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@view',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicView',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsClone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@clone',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@clone',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsClone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/destroy/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsPrint' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@print',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@print',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsPrint',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsSEOUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@seo',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@seo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsSEOUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsPhotosUpload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topics/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@upload',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@upload',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsPhotosUpload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsPhotosEdit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photos',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photos',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsPhotosEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsPhotosDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/photos/{photo_id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photosDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photosDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsPhotosDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsPhotosUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/photos/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photosUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@photosUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsPhotosUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsImport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topics-import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@import',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@import',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsImport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFiles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsFiles',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsFiles',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFiles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesCreate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesStore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesStore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/{file_id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesEdit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesEdit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/{file_id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesUpdate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesUpdate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/destroy/{file_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsFilesUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/files/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@filesUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsFilesUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelated' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/related',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsRelated',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsRelated',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelated',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelatedLoad' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/relatedLoad/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsRelatedLoad',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsRelatedLoad',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelatedLoad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelatedCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/related/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedCreate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelatedCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelatedStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/related/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedStore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedStore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelatedStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelatedDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/related/destroy/{related_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelatedDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsRelatedUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/related/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@relatedUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsRelatedUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsComments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsComments',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsComments',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsComments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsCreate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsStore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsStore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/{comment_id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsEdit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsEdit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/{comment_id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsUpdate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsUpdate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/destroy/{comment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsCommentsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/comments/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@commentsUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsCommentsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMaps' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsMaps',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@topicsMaps',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMaps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsCreate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsCreate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsStore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsStore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/{map_id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsEdit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsEdit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/{map_id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsUpdate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsUpdate',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/destroy/{map_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsDestroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsDestroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topicsMapsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/{webmasterId}/topics/{id}/maps/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsUpdateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@mapsUpdateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'topicsMapsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'keditor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keditor/{topic_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'keditor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'keditorSnippets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keditor-snippets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor_snippets',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor_snippets',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'keditorSnippets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'keditorSave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/keditor-save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor_save',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TopicsController@keditor_save',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'keditorSave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsStoreGroup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/storeGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@storeGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@storeGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsStoreGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsEditGroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{id}/editGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@editGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@editGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsEditGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsUpdateGroup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/{id}/updateGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@updateGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsUpdateGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsDestroyGroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/destroyGroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@destroyGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@destroyGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsDestroyGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{group_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contacts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsSearch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@search',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@search',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsSearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactsController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'contactsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsStoreGroup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/storeGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@storeGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@storeGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsStoreGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsEditGroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmails/{id}/editGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@editGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@editGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsEditGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsUpdateGroup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/{id}/updateGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@updateGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsUpdateGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsDestroyGroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmails/destroyGroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@destroyGroup',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@destroyGroup',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsDestroyGroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsSearch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@search',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@search',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsSearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmails/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmails/{group_id?}/{wid?}/{stat?}/{contact_email?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/webmails/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webmailsUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/webmails/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WebmailsController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'webmailsUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calendar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calendar/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/calendar/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calendar/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/calendar/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calendar/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/calendar/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendarExtend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/calendar/{id}/extend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EventsController@extend',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EventsController@extend',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'calendarExtend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'visitorsIP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ip/{ip_code?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@ip',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@ip',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'visitorsIP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'visitorsSearch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ip/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@search',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@search',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'visitorsSearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analyticsFilter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/analytics/{stat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@filter',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@filter',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'analyticsFilter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/analytics/{stat?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'analytics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'visitors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/visitors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@visitors',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AnalyticsController@visitors',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'visitors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usersUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'usersUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/permissions/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/permissions/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/permissions/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsHomePageUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/permissions/{id}/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@update_custom_home',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@update_custom_home',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsHomePageUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissionsDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/permissions/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@permissions_destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'permissionsDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customLinksStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permissions-links/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'customLinksStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customLinksUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permissions-links/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'customLinksUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customLinksEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions-links/edit/{id?}/{p_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'customLinksEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customLinksDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions-links/destroy/{id?}/{p_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'customLinksDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customLinksList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions-links/list/{p_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_list',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UsersController@links_list',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'customLinksList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parentMenusStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/store/parent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@storeMenu',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@storeMenu',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'parentMenusStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parentMenusEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/parent/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@editMenu',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@editMenu',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'parentMenusEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parentMenusUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{id}/update/{ParentMenuId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@updateMenu',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@updateMenu',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'parentMenusUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parentMenusDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/parent/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@destroyMenu',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@destroyMenu',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'parentMenusDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{ParentMenuId?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusCreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/create/{ParentMenuId?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusCreate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/store/{ParentMenuId?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}/edit/{ParentMenuId?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusDestroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menusUpdateAll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/updateAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MenusController@updateAll',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MenusController@updateAll',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'menusUpdateAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'FileManager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/file-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FileManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FileManagerController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'FileManager',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'FilesManager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/files-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FileManagerController@manager',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FileManagerController@manager',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'FilesManager',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'NoPermission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/403',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@page_403',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@page_403',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'NoPermission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cacheClear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cache-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@cache_clear',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@cache_clear',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'cacheClear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cacheCleared' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cache-cleared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@cache_cleared',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@cache_cleared',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'cacheCleared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminLogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@logout',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@logout',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'adminLogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'apiURL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@api',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@api',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'apiURL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yOy1G8zhAGbgE1Pz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_status',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_status',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yOy1G8zhAGbgE1Pz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jDJH3QaMaRExUkz3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/info/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_info',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_info',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jDJH3QaMaRExUkz3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WrEoShRq7z99vPed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/contacts/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_contacts',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_contacts',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WrEoShRq7z99vPed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hoq7loNVpucwTnzl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/style/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_style',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_style',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Hoq7loNVpucwTnzl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bRPeAo5CuKKkKejW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/social',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_social',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_social',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bRPeAo5CuKKkKejW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::31FhUCvyQscwvmwA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@website_settings',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@website_settings',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::31FhUCvyQscwvmwA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Js9NsCutTyy9djM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/menu/{menu_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@menu',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@menu',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4Js9NsCutTyy9djM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OOMPolxxYW1P2NAj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/banners/{group_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@banners',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@banners',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OOMPolxxYW1P2NAj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xqDzsoKLDqk3UcQ7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/section/{section_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@section',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@section',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::xqDzsoKLDqk3UcQ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nrPTughalCGWOkR3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/{section_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@categories',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@categories',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::nrPTughalCGWOkR3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wNf8kFp0RDcdOnbg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{section_id}/page/{page_number?}/count/{topics_count?}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topics',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topics',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::wNf8kFp0RDcdOnbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W8cEUAxMH6zI9ncU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/category/{cat_id}/page/{page_number?}/count/{topics_count?}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@category',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@category',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::W8cEUAxMH6zI9ncU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cbzq4Ff8NC8SK8JN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/fields/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_fields',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_fields',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Cbzq4Ff8NC8SK8JN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v3rFlqvJVoOHw8cl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/photos/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_photos',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_photos',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::v3rFlqvJVoOHw8cl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4OAQ7N22mm9zujBq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/photo/{photo_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_photo',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_photo',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4OAQ7N22mm9zujBq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8R33tPqSZayHLa2A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/maps/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_maps',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_maps',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8R33tPqSZayHLa2A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fZFZMUcI8aHgyquQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/map/{map_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_map',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_map',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fZFZMUcI8aHgyquQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fb4gfx1feDpXHMDT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/files/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_files',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_files',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fb4gfx1feDpXHMDT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4weDtc1ExLurwCiB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/file/{file_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_file',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_file',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4weDtc1ExLurwCiB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::emSdjk84pS3gNmep' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/comments/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_comments',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_comments',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::emSdjk84pS3gNmep',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VFj6fu2YZ5SVTk4E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/comment/{comment_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_comment',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_comment',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::VFj6fu2YZ5SVTk4E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RTbCUwYz8ya52yyh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/related/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_related',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic_related',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RTbCUwYz8ya52yyh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gUQi8UDmkjY3k44F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topic/{topic_id}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@topic',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@topic',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gUQi8UDmkjY3k44F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rvWsMVNwJi5fb1r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/{user_id}/topics/page/{page_number?}/count/{topics_count?}/{lang?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@user_topics',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@user_topics',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4rvWsMVNwJi5fb1r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8u0u31LqwpqpSaxY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@subscribeSubmit',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@subscribeSubmit',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8u0u31LqwpqpSaxY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UakEYatEmf9HKyrf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@commentSubmit',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@commentSubmit',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::UakEYatEmf9HKyrf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ksinyZ4XBs5wifCM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@orderSubmit',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@orderSubmit',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ksinyZ4XBs5wifCM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P7nc0XMiKm6gDzW4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\APIsController@ContactPageSubmit',
        'controller' => 'App\\Http\\Controllers\\APIs\\APIsController@ContactPageSubmit',
        'namespace' => 'App\\Http\\Controllers\\APIs',
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::P7nc0XMiKm6gDzW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'LanguageSwitcher',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'langChange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'LanguageSwitcher',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@change',
        'controller' => 'App\\Http\\Controllers\\LanguageController@change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'langChange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'localeChange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'LanguageSwitcher',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@locale',
        'controller' => 'App\\Http\\Controllers\\LanguageController@locale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'localeChange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'NotFound' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{lang?}/404',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@page_404',
        'controller' => 'App\\Http\\Controllers\\HomeController@page_404',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'NotFound',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Spatie\\Feed\\Http\\FeedController@__invoke',
        'controller' => '\\Spatie\\Feed\\Http\\FeedController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'feeds.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'social.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/{driver}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'social.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bDw43iQbhJxg3YnR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bDw43iQbhJxg3YnR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8RkHog7ph1Vu6AI2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8RkHog7ph1Vu6AI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hRuEw3lIWwIbWZDQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hRuEw3lIWwIbWZDQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteMap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteMapController@siteMap',
        'controller' => 'App\\Http\\Controllers\\SiteMapController@siteMap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'siteMap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteMapByLang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{lang}/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteMapController@siteMap',
        'controller' => 'App\\Http\\Controllers\\SiteMapController@siteMap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'siteMapByLang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'formSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'form-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@form_submit',
        'controller' => 'App\\Http\\Controllers\\HomeController@form_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'formSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribeSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@subscribe_submit',
        'controller' => 'App\\Http\\Controllers\\HomeController@subscribe_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscribeSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'commentSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@comment_submit',
        'controller' => 'App\\Http\\Controllers\\HomeController@comment_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'commentSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orderSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@order_submit',
        'controller' => 'App\\Http\\Controllers\\HomeController@order_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'orderSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactPageSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contact_submit',
        'controller' => 'App\\Http\\Controllers\\HomeController@contact_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contactPageSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contact_page',
        'controller' => 'App\\Http\\Controllers\\HomeController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contactPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactPageByLang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{lang?}/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contact_page',
        'controller' => 'App\\Http\\Controllers\\HomeController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contactPageByLang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontendRoute' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{part1?}/{part2?}/{part3?}/{part4?}/{part5?}/{part6?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@seo',
        'controller' => 'App\\Http\\Controllers\\HomeController@seo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontendRoute',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
