(*
** HX-2014-10:
** Patsopt-as-a-Service (PATSOPTAAS)
*)

(* ****** ****** *)
//
#include
"share/atspre_define.hats"
#include
"share/atspre_staload.hats"
#include
"share/HATS/atspre_staload_libats_ML.hats"
//
(* ****** ****** *)
//
staload "{$LIBATSHWXI}/weboxy/SATS/weboxy.sats"
staload _ = "{$LIBATSHWXI}/weboxy/DATS/weboxy.dats"
//
(* ****** ****** *)

(*
local
//
val () = randcolor_initize ()
//
val webox_make_ = webox_make<>
//
in (* in-of-local *)
//
implement
{}(*tmp*)
webox_make
  () = wbx where
{
  val wbx = webox_make_ ()
  val () = wbx.bgcolor(randcolor())
} (* end of [webox_make] *)
//
end // end of [local]
*)

(* ****** ****** *)
//
val thePage2 =
  webox_make_name ("thePage2")
//
val () = thePage2.pheight(100)
//
(* ****** ****** *)
//
val thePage2Left =
  webox_make_name ("thePage2Left")
val thePage2Right =
  webox_make_name ("thePage2Right")
//
val () = thePage2Left.pheight(100)
val () = thePage2Right.pheight(100)
//
val () = thePage2.tabstyle(TShbox)
val () = thePage2.percentlst ($list(15, 85))
val () = thePage2.children(thePage2Left, thePage2Right)
//
(* ****** ****** *)
//
val thePage2RTop =
  webox_make_name ("thePage2RTop")
//
val () = thePage2RTop.pheight(100)
val () = thePage2RTop.bgcolor("rgb(143,2,34)")
//
val thePage2RBody =
  webox_make_name ("thePage2RBody")
(*
val thePage2RFooter =
  webox_make_name ("thePage2RFooter")
*)
//
val () = thePage2RBody.pheight(100)
//
val () = thePage2Right.tabstyle(TSvbox)
val () = thePage2Right.percentlst ($list(6, 94))
val () = thePage2Right.children(thePage2RTop, thePage2RBody)
//
(* ****** ****** *)
//
val theBodyProp =
  webox_make_name ("theBodyProp")
//
val () = theBodyProp.bgcolor("")
val () = theBodyProp.pheight(100)
//
val () = theBodyProp.children(thePage2)
//
(* ****** ****** *)

implement
fprint_webox_head_end<>
  (out) = let
//
val () =
fprint (out, "\
<link\n\
 rel=\"icon\" type=\"image/gif\"\n\
 href=\"./MYDATA/favicon_animated.gif\">\n\
</link>\n\
") (* end of [val] *)
//
val () =
fprint (out,
"\
<script\n\
 src=\"./SCRIPT/jquery-2.1.1.min.js\">\n\
</script>\n"
) (* end of [val] *)
//
val () =
fprint (out, "\
<script\n\
 src=\"//cdn.jsdelivr.net/ace/1.1.6/min/ace.js\">\n\
</script>\n\
") (* end of [val] *)
//
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/libatscc2js_all.js\">\n\
</script>\n"
) (* end of [val] *)
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/libatscc2js_print_store.js\">\n\
</script>\n"
) (* end of [val] *)
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/atslangweb_utils_dats.js\">\n\
</script>\n"
) (* end of [val] *)
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/patsoptaas_utils_dats.js\">\n\
</script>\n"
) (* end of [val] *)
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/patsoptaas_examples_dats.js\">\n\
</script>\n"
) (* end of [val] *)
val () =
fprint (out, "\
<script\n\
 src=\"./CLIENT/mycode/patsoptaas_templates_dats.js\">\n\
</script>\n"
) (* end of [val] *)
//
in
  // nothing
end // end of [fprint_webox_head_end]

(* ****** ****** *)

implement
fprint_css_preamble<>
  (out) = let
//
val () =
fprint (out, "\
html {\n\
  height: 100%;\n\
}\n\
body {\n\
  margin: 0px;\n\
  height: 100%;\n\
}\n\
") (* end of [fprint] *)
//
in
  // nothing
end // end of [fprint_css_preamble]

(* ****** ****** *)

implement
fprint_css_postamble<>
  (out) = let
//
val () =
fprint (out, "\
\n\
body {\n\
  font-family: Helvetica, Arial, sans-serif;\n\
  background-color: #213449; /* dark blue */\n\
}\n\
") (* end of [fprint] *)
// 
(*
val () =
fprint (out, "\
\n\
#thePage2\n\
{\n\
  width: 90%;\n\
  margin-left: auto;\n\
  margin-right: auto;\n\
}\n\
") (* end of [fprint] *)
*)
//
val () =
fprint (out, "\
\n\
#thePage2Left\n\
{\n\
  background-color: #1e5799;\n\
  background-image: linear-gradient(to right, #1e5799, #7db9e8);\n\
}\n\
") (* end of [fprint] *)
//
in
  // nothing
end // end of [fprint_css_postamble]

(* ****** ****** *)

implement
fprint_webox_body_after<>
  (out) = let
//
(*
val () =
fprint (out, "\
<script>\n\
(\n\
function()\n\
{\n\
var\n\
height =\n\
window.innerHeight - 16;\n\
height =\n\
height -\n\
$('#thePage2RTop').outerHeight(true);\n\
jQuery('#thePage2RBody').css({height:height});\n\
}(/*void*/)\n\
)\n\
</script>\n\
") (* end of [val] *)
*)
//
val () =
fprint (out, "\
<script>\n\
(\n\
function()\n\
{\n\
//\n\
var editor =
  ace.edit('thePage2RBody1_prop');\n\
//\n\
editor.setFontSize('16px');\n\
editor.setTheme('ace/theme/monokai');\n\
editor.getSession().setValue(Patsoptaas_getWelcomeMessage());\n\
//\n\
}\n\
)(/*void*/);\n\
(\n\
function()\n\
{\n\
//\n\
document.getElementById('Patsopt-tcats-flag').checked = true;\n\
document.getElementById('Patsopt2js-eval-flag').checked = true;\n\
document.getElementById('Compile-stderr-flag').checked = true;\n\
//\n\
document.getElementById('File_special_select').selectedIndex = 0;\n\
//\n\
}\n\
)(/*void*/);\n\
</script>\n\
")
//
in
  // nothing
end // end of [fprint_webox_body_after]

(* ****** ****** *)

(* end of [mylayout2.dats] *)
