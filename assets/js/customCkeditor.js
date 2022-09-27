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
		{ name: "tools", groups: ["tools"] },
		"/",
		{ name: "styles", groups: ["styles"] },
		{ name: "basicstyles", groups: ["basicstyles", "cleanup"] },
		{ name: "insert", groups: ["insert"] },
		"/",
		{ name: "colors", groups: ["colors"] },
		{ name: "others", groups: ["others"] },
		{ name: "about", groups: ["about"] },
	];
	config.styleSet = "<?= base_url('assets/js/customStyles.js')?>";
	config.removeButtons =
		"Save,NewPage,Templates,Preview,ExportPdf,Print,Source,PasteFromWord,PasteText,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,CreateDiv,Language,Unlink,Anchor,Smiley,Iframe,PageBreak,Format,FontSize,TextColor,BGColor,ShowBlocks,About";
};
