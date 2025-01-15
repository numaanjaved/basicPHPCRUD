$(document).on("click", "#errNotificationCloseBtn", (e) => {
    let notification = e.target.parentElement.parentElement.parentElement;
    $(notification).remove();
});