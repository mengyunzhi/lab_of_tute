function nextDay(i) {
    let today = new Date();
    let result = new Date();
    result.setDate(today.getDate() + i);
    return result;
}
$('.form_datetime').datetimepicker({
    language:  'zh-CN',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1,
    startDate: nextDay(2),
    initialDate: nextDay(2)
});