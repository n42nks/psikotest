/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = 'http://localhost/dcc/public/ckeditor/kcfinder/upload.php?type=flash';
};
