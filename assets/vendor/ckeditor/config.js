/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	config.toolbarGroups = [
		{ name: "document", groups: ["mode", "document", "doctools"] },
		{ name: "clipboard", groups: ["clipboard", "undo"] },
		{
			name: "editing",
			groups: ["find", "selection", "spellchecker", "editing"],
		},
		{ name: "forms", groups: ["forms"] },
		{
			name: "paragraph",
			groups: ["list", "indent", "blocks", "align", "bidi", "paragraph"],
		},
		{ name: "links", groups: ["links"] },
		{ name: "insert", groups: ["insert"] },
		{ name: "tools", groups: ["tools"] },
		"/",
		{ name: "basicstyles", groups: ["basicstyles", "cleanup"] },
		{ name: "styles", groups: ["styles"] },
		"/",
		{ name: "colors", groups: ["colors"] },
		{ name: "others", groups: ["others"] },
		{ name: "about", groups: ["about"] },
	];

	config.removeButtons =
		"Save,NewPage,Templates,Preview,ExportPdf,Print,Source,PasteFromWord,PasteText,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,CreateDiv,Language,Unlink,Anchor,Smiley,Iframe,PageBreak,Format,FontSize,TextColor,BGColor,ShowBlocks,About";
};