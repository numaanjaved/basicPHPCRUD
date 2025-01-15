let formImg = $("#form_img");
$(".choose_img_label").on("mouseenter", () => {
    $("#img_info").css("opacity", "1");
}).on("mouseleave", () => {
    $("#img_info").css("opacity", "0");
});

$("#imageUpload").on("change", (event) => {
    let file = event.target.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = (e) => {
            let imageDataUrl = e.target.result;
            $(formImg).attr("src", imageDataUrl).css("display", "block");
        }
        reader.readAsDataURL(file);
    }
});
