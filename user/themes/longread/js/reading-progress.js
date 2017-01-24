$(document).on('ready', function() {  
  var winHeight = $(window).height(), 
    docHeight = $('.chapter').height(),
    progressBar = $('#reading-progress > progress'),
    max, value;

  /* Set the max scrollable area */
  max = docHeight - winHeight;
  progressBar.attr('max', max);

  /* position active reading progress based on chapter offset */
  setReadingProgressOffset();

  /* update progress value on scroll */
  $(document).on('scroll', function(){
    updateProgressValue();  
  });

  /* update on window resize */
  $(window).on('resize', function() {
    updateProgressMax();
    updateProgressValue();
    setReadingProgressOffset();
  });

  function updateProgressValue() {
    value =  $(window).scrollTop();
    progressBar.attr('value', value);
  }
  function updateProgressMax() {
    winHeight = $(window).height(),
    docHeight = $(document).height();

    max = docHeight - winHeight;
    progressBar.attr('max', max);
  }
  function setReadingProgressOffset() {
    var chapterOffsetLeft = $('.chapter').offset().left;
    console.log(chapterOffsetLeft);
    document.styleSheets[0].addRule('#reading-progress progress.uk-active','left: '+chapterOffsetLeft+'px !important');
  }
});