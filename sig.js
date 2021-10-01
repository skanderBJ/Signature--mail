


$(document).ready(function () {
    $(".nav-tabs a").click(function () {
        $(this).tab('show');
    });
});



(function () {
    $(document).ready(function () {
        var t, n, e, i;
        return t = 0,


            //Show Content Source of your Signature mail
            $("#getSourceBtn").click(function () {
                var t;
                return t = unescape(
                    $("#email-sig-box").html()),
                    $("#modalContent").text(t)
            }),


            $("#selectAllButton").click(function () { return e("modalContent") }),


            $("#highlightSelectBtn").click(function () {
                return e("email-sig-box")
            }),

            $("#toggleSetupInfo").click(function () {
                return $("#setupInfo").toggle()
            }),

            $("input#nameInputField").change(function () {
                var e;
                return e = $(this).val(),
                    $("#sigName").text(e), 1 !== t ? n(!1, !1) : void 0
            }),
            $("input#titleInputField").change(function () {
                var e;
                return e = $(this).val(),
                    $("#sigTitle").text(e),
                    $("#sigTitle").text("" === e ? "" : "/ " + e), 1 !== t ? n(!1, !1) : void 0
            }),


            $("input#emailInputField").change(function () {
                var t; return
                t = $(this).val(), $("#sigEmail").text(t),
                    $("#sigEmail").attr("href", "mailto:" + t)
            }),
            $("input#mobileInputField").change(function () {

                var t; return t = $(this).val(), $("#sigMobile").text("" === t ? "" : "/ " + t)
            }),
            $("input#companyInputField").change(function () {
                var t; return t = $(this).val(), $("#sigCompany").text(t), "" === t ?

                    $("#sigCompanyWrapper").css("margin-top", "-14px") : $("#sigCompanyWrapper").css("margin-top", "0")
            }),
            $("input#websiteInputField").change(function () {
                var t; return t = $(this).val(), $("#sigWebsite").text(t),
                    $("#sigWebsite").attr("href", t)
            }),
            $("input#addressInputField").change(function () {
                var t; return t = $(this).val(),
                    $("#sigAddress").text(t)
            }),

            $("input#photoInputField").change(function () {
                var t; return t = $(this).val(),
                    $("#sigPhoto").attr("src", t), "" === t ? ($("#sigPhoto").hide(),
                    $("#sigDetailsWrapper").css("margin-left", "0")) : ($("#photoInputField").show(),
                            $("#sigDetailsWrapper").css("margin-left", "74px"))
            }),

            //URL Twitter
            $("input#twitterURLInputField").change(function () {
                var t;
                return t = $(this).val(), "" === t ?
                    $("#twitterIcon").hide() : ($("#twitterIcon a").attr("href", t), $("#twitterIcon").show())
            }),
            //URL facebook
            $("input#facebookURLInputField").change(function () {
                var t; return t = $(this).val(), "" === t ? $("#facebookIcon").hide() : ($("#facebookIcon a").attr("href", t), $("#facebookIcon").show())
            }),
            //URL GPlus
            $("input#gplusURLInputField").change(function () {
                var t; return t = $(this).val(), "" === t ? $("#gplusIcon").hide() : ($("#gplusIcon a").attr("href", t), $("#gplusIcon").show())
            }),
            //URL Linkedin
            $("input#linkedinURLInputField").change(function () {
                var t; return t = $(this).val(), "" === t ? $("#linkedinIcon").hide() : ($("#linkedinIcon a").attr("href", t), $("#linkedinIcon").show())
            }),

            // URL Instagram
            $("input#instagramURLInputField").change(function () {
                var t; return t = $(this).val(), "" === t ? $("#instagramIcon").hide() : ($("#instagramIcon a").attr("href", t), $("#instagramIcon").show())
            }),
            $("input#githubURLInputField").change(function () { var t; return t = $(this).val(), "" === t ? $("#githubIcon").hide() : ($("#githubIcon a").attr("href", t), $("#githubIcon").show()) }),
            // URL viemo 
            $("input#vimeoURLInputField").change(function () { var t; return t = $(this).val(), "" === t ? $("#vimeoIcon").hide() : ($("#vimeoIcon a").attr("href", t), $("#vimeoIcon").show()) }),
            //URL Youtube
            $("input#youtubeURLInputField").change(function () { var t; return t = $(this).val(), "" === t ? $("#youtubeIcon").hide() : ($("#youtubeIcon a").attr("href", t), $("#youtubeIcon").show()) }),
            //Dribble
            $("input#dribbleURLInputField").change(function () { var t; return t = $(this).val(), "" === t ? $("#dribbleIcon").hide() : ($("#dribbleIcon a").attr("href", t), $("#dribbleIcon").show()) }),
            // BlogURL 
            $("input#blogURLInputField").change(function () { var t; return t = $(this).val(), "" === t ? $("#blogIcon").hide() : ($("#blogIcon a").attr("href", t), $("#blogIcon").show()) }),

            n = function (n, e) {
                return null == n && (n = !0), null == e && (e = !0), console.log("resetting preview data"),
                    t = 1, e === !1 && ("" === $("input#twitterURLInputField").val() && $("#twitterIcon").hide(),
                        "" === $("input#facebookURLInputField").val() && $("#facebookIcon").hide(),
                        "" === $("input#gplusURLInputField").val() && $("#gplusIcon").hide(),
                        "" === $("input#linkedinURLInputField").val() && $("#linkedinIcon").hide(),
                        "" === $("input#instagramURLInputField").val() && $("#instagramIcon").hide(),
                        "" === $("input#githubURLInputField").val() && $("#githubIcon").hide(),
                        "" === $("input#vimeoURLInputField").val() && $("#vimeoIcon").hide(),
                        "" === $("input#youtubeURLInputField").val() && $("#youtubeIcon").hide(),
                        "" === $("input#dribbleURLInputField").val() && $("#dribbleIcon").hide(),
                        "" === $("input#blogURLInputField").val() && $("#blogIcon").hide()),
                    n === !1 &&
                        ("" === $("input#titleInputField").val() && $("#sigTitle").text(""),
                            "" === $("input#emailInputField").val() && $("#sigEmail").text(""),
                            "" === $("input#mobileInputField").val() && $("#sigMobile").text(""),
                            "" === $("input#companyInputField").val() && $("#sigCompany").text(""),
                            "" === $("input#websiteInputField").val() && $("#sigWebsite").text(""),
                            "" === $("input#addressInputField").val() && $("#sigAddress").text(""),
                            "" === $("input#photoInputField").val()) ? $("#photoWrapper").hide() : void 0
            },


            e = function (t) {
                var n, e, i, a;
                return n = document, a = n.getElementById(t),
                    e = void 0, i = void 0,
                    n.body.createTextRange ? (e = document.body.createTextRange(), e.moveToElementText(a),
                        e.select()) : window.getSelection ? (i = window.getSelection(), e = document.createRange(), e.selectNodeContents(a), i.removeAllRanges(), i.addRange(e)) : void 0
            },
            i = window.location.pathname, $('#primaryNav a[href="' + i + '"]').parent().addClass("active")
    })
}).call(this);

  


 $(document).on("click", function () {
    var file = $(this).parents().find(".file");
    file.trigger("click");
});
$('input[type="file"]').change(function (e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("peview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});


