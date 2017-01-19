// insert ids for heading elements in chapter
$('h1, h2, h3, h4').attr('id', function (index, attr) {
	return $(this).text().replace(/\s/g, '-').toLowerCase();
});
