$('#menu').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing'
});

$("#code").change(function (e) {
    $("#phone").val($(this).val())
});
