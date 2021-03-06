<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit187851110725ba33b99af9fa0683f3e7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasWeb\\Utils\\' => 18,
            'MatthiasWeb\\RealMediaLibrary\\Test\\' => 34,
            'MatthiasWeb\\RealMediaLibrary\\' => 29,
        ),
        'D' => 
        array (
            'DevOwl\\Freemium\\Test\\' => 21,
            'DevOwl\\Freemium\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasWeb\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/devowl-wp/utils/src',
        ),
        'MatthiasWeb\\RealMediaLibrary\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'MatthiasWeb\\RealMediaLibrary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
            1 => __DIR__ . '/../..' . '/src/inc',
        ),
        'DevOwl\\Freemium\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/devowl-wp/freemium/test/phpunit',
        ),
        'DevOwl\\Freemium\\' => 
        array (
            0 => __DIR__ . '/..' . '/devowl-wp/freemium/src',
        ),
    );

    public static $classMap = array (
        'DevOwl\\Freemium\\Assets' => __DIR__ . '/..' . '/devowl-wp/freemium/src/Assets.php',
        'DevOwl\\Freemium\\Autoloader' => __DIR__ . '/..' . '/devowl-wp/freemium/src/Autoloader.php',
        'DevOwl\\Freemium\\CoreLite' => __DIR__ . '/..' . '/devowl-wp/freemium/src/CoreLite.php',
        'DevOwl\\Freemium\\CorePro' => __DIR__ . '/..' . '/devowl-wp/freemium/src/CorePro.php',
        'DevOwl\\Freemium\\FreemiumProvider' => __DIR__ . '/..' . '/devowl-wp/freemium/src/FreemiumProvider.php',
        'DevOwl\\Freemium\\ICore' => __DIR__ . '/..' . '/devowl-wp/freemium/src/ICore.php',
        'MatthiasWeb\\RealMediaLibrary\\Activator' => __DIR__ . '/../..' . '/inc/Activator.php',
        'MatthiasWeb\\RealMediaLibrary\\Assets' => __DIR__ . '/../..' . '/inc/Assets.php',
        'MatthiasWeb\\RealMediaLibrary\\Core' => __DIR__ . '/../..' . '/inc/Core.php',
        'MatthiasWeb\\RealMediaLibrary\\Localization' => __DIR__ . '/../..' . '/inc/Localization.php',
        'MatthiasWeb\\RealMediaLibrary\\Util' => __DIR__ . '/../..' . '/inc/Util.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IFolder' => __DIR__ . '/../..' . '/inc/api/IFolder.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IFolderActions' => __DIR__ . '/../..' . '/inc/api/IFolderActions.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IFolderContent' => __DIR__ . '/../..' . '/inc/api/IFolderContent.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IMetadata' => __DIR__ . '/../..' . '/inc/api/IMetadata.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IStructure' => __DIR__ . '/../..' . '/inc/api/IStructure.php',
        'MatthiasWeb\\RealMediaLibrary\\api\\IUserSettings' => __DIR__ . '/../..' . '/inc/api/IUserSettings.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\CountCache' => __DIR__ . '/../..' . '/inc/attachment/CountCache.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\CustomField' => __DIR__ . '/../..' . '/inc/attachment/CustomField.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\Filter' => __DIR__ . '/../..' . '/inc/attachment/Filter.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\Permissions' => __DIR__ . '/../..' . '/inc/attachment/Permissions.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\Shortcut' => __DIR__ . '/../..' . '/inc/attachment/Shortcut.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\Structure' => __DIR__ . '/../..' . '/inc/attachment/Structure.php',
        'MatthiasWeb\\RealMediaLibrary\\attachment\\Upload' => __DIR__ . '/../..' . '/inc/attachment/Upload.php',
        'MatthiasWeb\\RealMediaLibrary\\base\\Core' => __DIR__ . '/../..' . '/inc/base/Core.php',
        'MatthiasWeb\\RealMediaLibrary\\base\\UtilsProvider' => __DIR__ . '/../..' . '/inc/base/UtilsProvider.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\ExImport' => __DIR__ . '/../..' . '/inc/comp/ExImport.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\ExportMediaLibrary' => __DIR__ . '/../..' . '/inc/comp/ExportMediaLibrary.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\HierarchicalFilenameResolver' => __DIR__ . '/../..' . '/inc/comp/ExportMediaLibrary.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\PageBuilders' => __DIR__ . '/../..' . '/inc/comp/PageBuilders.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\PolyLang' => __DIR__ . '/../..' . '/inc/comp/PolyLang.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\WPML' => __DIR__ . '/../..' . '/inc/comp/WPML.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\complexquery\\ComplexQuery' => __DIR__ . '/../..' . '/inc/comp/complexquery/ComplexQuery.php',
        'MatthiasWeb\\RealMediaLibrary\\comp\\complexquery\\ResetNames' => __DIR__ . '/../..' . '/inc/comp/complexquery/ResetNames.php',
        'MatthiasWeb\\RealMediaLibrary\\exception\\FolderAlreadyExistsException' => __DIR__ . '/../..' . '/inc/exception/FolderAlreadyExistsException.php',
        'MatthiasWeb\\RealMediaLibrary\\exception\\OnlyInProVersionException' => __DIR__ . '/../..' . '/inc/exception/OnlyInProVersionException.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\BaseFolder' => __DIR__ . '/../..' . '/inc/folder/BaseFolder.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\CRUD' => __DIR__ . '/../..' . '/inc/folder/CRUD.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\Creatable' => __DIR__ . '/../..' . '/inc/folder/Creatable.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\Folder' => __DIR__ . '/../..' . '/inc/folder/Folder.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\QueryCount' => __DIR__ . '/../..' . '/inc/folder/QueryCount.php',
        'MatthiasWeb\\RealMediaLibrary\\folder\\Root' => __DIR__ . '/../..' . '/inc/folder/Root.php',
        'MatthiasWeb\\RealMediaLibrary\\metadata\\CommonFolderTrait' => __DIR__ . '/../..' . '/inc/metadata/CommonFolderTrait.php',
        'MatthiasWeb\\RealMediaLibrary\\metadata\\CommonTrait' => __DIR__ . '/../..' . '/inc/metadata/CommonTrait.php',
        'MatthiasWeb\\RealMediaLibrary\\metadata\\CoverImage' => __DIR__ . '/../..' . '/inc/metadata/CoverImage.php',
        'MatthiasWeb\\RealMediaLibrary\\metadata\\Description' => __DIR__ . '/../..' . '/inc/metadata/Description.php',
        'MatthiasWeb\\RealMediaLibrary\\metadata\\Meta' => __DIR__ . '/../..' . '/inc/metadata/Meta.php',
        'MatthiasWeb\\RealMediaLibrary\\order\\Sortable' => __DIR__ . '/../..' . '/inc/order/Sortable.php',
        'MatthiasWeb\\RealMediaLibrary\\overrides\\interfce\\IOverrideCore' => __DIR__ . '/../..' . '/inc/overrides/interfce/IOverrideCore.php',
        'MatthiasWeb\\RealMediaLibrary\\overrides\\interfce\\comp\\IOverrideExImport' => __DIR__ . '/../..' . '/inc/overrides/interfce/comp/IOverrideExImport.php',
        'MatthiasWeb\\RealMediaLibrary\\overrides\\interfce\\comp\\IOverrideWPML' => __DIR__ . '/../..' . '/inc/overrides/interfce/comp/IOverrideWPML.php',
        'MatthiasWeb\\RealMediaLibrary\\overrides\\interfce\\folder\\IOverrideCreatable' => __DIR__ . '/../..' . '/inc/overrides/interfce/folder/IOverrideCreatable.php',
        'MatthiasWeb\\RealMediaLibrary\\overrides\\interfce\\order\\IOverrideSortable' => __DIR__ . '/../..' . '/inc/overrides/interfce/order/IOverrideSortable.php',
        'MatthiasWeb\\RealMediaLibrary\\rest\\Attachment' => __DIR__ . '/../..' . '/inc/rest/Attachment.php',
        'MatthiasWeb\\RealMediaLibrary\\rest\\Folder' => __DIR__ . '/../..' . '/inc/rest/Folder.php',
        'MatthiasWeb\\RealMediaLibrary\\rest\\Reset' => __DIR__ . '/../..' . '/inc/rest/Reset.php',
        'MatthiasWeb\\RealMediaLibrary\\rest\\Service' => __DIR__ . '/../..' . '/inc/rest/Service.php',
        'MatthiasWeb\\RealMediaLibrary\\usersettings\\AllFilesShortcuts' => __DIR__ . '/../..' . '/inc/usersettings/AllFilesShortcuts.php',
        'MatthiasWeb\\RealMediaLibrary\\usersettings\\CommonUserSettingsTrait' => __DIR__ . '/../..' . '/inc/usersettings/CommonUserSettingsTrait.php',
        'MatthiasWeb\\RealMediaLibrary\\usersettings\\DefaultFolder' => __DIR__ . '/../..' . '/inc/usersettings/DefaultFolder.php',
        'MatthiasWeb\\RealMediaLibrary\\usersettings\\Demo' => __DIR__ . '/../..' . '/inc/usersettings/Demo.php',
        'MatthiasWeb\\RealMediaLibrary\\view\\FolderShortcode' => __DIR__ . '/../..' . '/inc/view/FolderShortcode.php',
        'MatthiasWeb\\RealMediaLibrary\\view\\Gutenberg' => __DIR__ . '/../..' . '/inc/view/Gutenberg.php',
        'MatthiasWeb\\RealMediaLibrary\\view\\Lang' => __DIR__ . '/../..' . '/inc/view/Lang.php',
        'MatthiasWeb\\RealMediaLibrary\\view\\Options' => __DIR__ . '/../..' . '/inc/view/Options.php',
        'MatthiasWeb\\RealMediaLibrary\\view\\View' => __DIR__ . '/../..' . '/inc/view/View.php',
        'MatthiasWeb\\Utils\\Activator' => __DIR__ . '/..' . '/devowl-wp/utils/src/Activator.php',
        'MatthiasWeb\\Utils\\Assets' => __DIR__ . '/..' . '/devowl-wp/utils/src/Assets.php',
        'MatthiasWeb\\Utils\\Base' => __DIR__ . '/..' . '/devowl-wp/utils/src/Base.php',
        'MatthiasWeb\\Utils\\Core' => __DIR__ . '/..' . '/devowl-wp/utils/src/Core.php',
        'MatthiasWeb\\Utils\\Localization' => __DIR__ . '/..' . '/devowl-wp/utils/src/Localization.php',
        'MatthiasWeb\\Utils\\PackageLocalization' => __DIR__ . '/..' . '/devowl-wp/utils/src/PackageLocalization.php',
        'MatthiasWeb\\Utils\\PluginReceiver' => __DIR__ . '/..' . '/devowl-wp/utils/src/PluginReceiver.php',
        'MatthiasWeb\\Utils\\Service' => __DIR__ . '/..' . '/devowl-wp/utils/src/Service.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit187851110725ba33b99af9fa0683f3e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit187851110725ba33b99af9fa0683f3e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit187851110725ba33b99af9fa0683f3e7::$classMap;

        }, null, ClassLoader::class);
    }
}
