<?php
/*
**
** The PHP code is generated by atscc2php
** The starting compilation time is: 2016-8-1: 17h: 8m
**
*/

function
atslangweb_patsopt_tcats_code_0_($arg0)
{
/*
  // $tmpret3
*/
  __patsflab_patsopt_tcats_code_0_:
  $tmpret3 = atslangweb__patsopt_tcats_code__4__1($arg0);
  return $tmpret3;
} // end-of-function


function
atslangweb__patsopt_tcats_code__4__1($arg0)
{
/*
  // $tmpret4__1
  // $tmp5__1
  // $tmp6__1
  // $tmp7__1
*/
  __patsflab_patsopt_tcats_code:
  $tmp5__1 = atslangweb__tmpfile_make_string("patsopt_tcats_", $arg0);
  $tmp6__1 = atslangweb__patsopt_tcats_file__6__1($tmp5__1);
  $tmp7__1 = atslangweb__tmpfile_unlink($tmp5__1);
  $tmpret4__1 = $tmp6__1;
  return $tmpret4__1;
} // end-of-function


function
atslangweb__patsopt_tcats_file__6__1($arg0)
{
/*
  // $tmpret12__1
  // $tmp13__1
  // $tmp14__1
  // $tmp15__1
  // $tmp16__1
  // $tmp17__1
  // $tmp18__1
  // $tmp19__1
*/
  __patsflab_patsopt_tcats_file:
  $tmp13__1 = atslangweb__tmpfile_make_nil("patsopt_tcats_");
  $tmp14__1 = atslangweb__patsopt_tcats_command__8__1($arg0, $tmp13__1);
  $tmp15__1 = atslangweb_exec_retval($tmp14__1);
  $tmp17__1 = ats2phppre_eq_int0_int0($tmp15__1, 0);
  if($tmp17__1) {
    $tmp16__1 = array(0, "Typechecking passed!");
  } else {
    $tmp18__1 = atslangweb__tmpfile2string($tmp13__1);
    $tmp16__1 = array(1, $tmp18__1);
  } // endif
  $tmp19__1 = atslangweb__tmpfile_unlink($tmp13__1);
  $tmpret12__1 = $tmp16__1;
  return $tmpret12__1;
} // end-of-function


function
atslangweb__patsopt_tcats_command__8__1($arg0, $arg1)
{
/*
  // $tmpret28__1
  // $tmp29__1
*/
  __patsflab_patsopt_tcats_command:
  $tmp29__1 = atslangweb__patsopt_command__0__1();
  $tmpret28__1 = sprintf("%s 2>%s --typecheck --dynamic %s", $tmp29__1, $arg1, $arg0);
  return $tmpret28__1;
} // end-of-function


function
atslangweb__patsopt_command__0__1()
{
/*
  // $tmpret0__1
*/
  __patsflab_patsopt_command:
  $tmpret0__1 = "patsopt";
  return $tmpret0__1;
} // end-of-function


function
atslangweb_patsopt_tcats_code_1_($arg0)
{
/*
  // $tmpret33
  // $tmp34
*/
  __patsflab_patsopt_tcats_code_1_:
  $tmp34 = sprintf("%s\n%s\n%s\n", $GLOBALS['atslangweb_patsopt_tcats_preamble'], $arg0, $GLOBALS['atslangweb_patsopt_tcats_postamble']);
  $tmpret33 = atslangweb_patsopt_tcats_code_0_($tmp34);
  return $tmpret33;
} // end-of-function


function
atslangweb_patsopt_ccats_code_0_($arg0)
{
/*
  // $tmpret35
*/
  __patsflab_patsopt_ccats_code_0_:
  $tmpret35 = atslangweb__patsopt_ccats_code__13__1($arg0);
  return $tmpret35;
} // end-of-function


function
atslangweb__patsopt_ccats_code__13__1($arg0)
{
/*
  // $tmpret36__1
  // $tmp37__1
  // $tmp38__1
  // $tmp39__1
*/
  __patsflab_patsopt_ccats_code:
  $tmp37__1 = atslangweb__tmpfile_make_string("patsopt_ccats_", $arg0);
  $tmp38__1 = atslangweb__patsopt_ccats_file__15__1($tmp37__1);
  $tmp39__1 = atslangweb__tmpfile_unlink($tmp37__1);
  $tmpret36__1 = $tmp38__1;
  return $tmpret36__1;
} // end-of-function


function
atslangweb__patsopt_ccats_file__15__1($arg0)
{
/*
  // $tmpret44__1
  // $tmp45__1
  // $tmp46__1
  // $tmp47__1
  // $tmp48__1
  // $tmp49__1
  // $tmp50__1
  // $tmp51__1
  // $tmp52__1
  // $tmp53__1
  // $tmp54__1
  // $tmp55__1
*/
  __patsflab_patsopt_ccats_file:
  $tmp45__1 = atslangweb__tmpfile_make_nil("patsopt_ccats_");
  $tmp46__1 = atslangweb__tmpfile_make_nil("patsopt_ccats_");
  $tmp47__1 = atslangweb__patsopt_ccats_command__17__1($arg0, $tmp45__1, $tmp46__1);
  $tmp48__1 = atslangweb_exec_retval($tmp47__1);
  $tmp50__1 = ats2phppre_eq_int0_int0($tmp48__1, 0);
  if($tmp50__1) {
    $tmp51__1 = atslangweb__patsopt_ccats_cont__20__1($tmp45__1);
    $tmp52__1 = atslangweb__tmpfile_unlink($tmp45__1);
    $tmp49__1 = $tmp51__1;
  } else {
    $tmp53__1 = atslangweb__tmpfile2string($tmp46__1);
    $tmp54__1 = atslangweb__tmpfile_unlink($tmp45__1);
    $tmp49__1 = array(1, $tmp53__1);
  } // endif
  $tmp55__1 = atslangweb__tmpfile_unlink($tmp46__1);
  $tmpret44__1 = $tmp49__1;
  return $tmpret44__1;
} // end-of-function


function
atslangweb__patsopt_ccats_command__17__1($arg0, $arg1, $arg2)
{
/*
  // $tmpret68__1
  // $tmp69__1
*/
  __patsflab_patsopt_ccats_command:
  $tmp69__1 = atslangweb__patsopt_command__0__2();
  $tmpret68__1 = sprintf("%s 2>%s --output %s --dynamic %s", $tmp69__1, $arg2, $arg1, $arg0);
  return $tmpret68__1;
} // end-of-function


function
atslangweb__patsopt_command__0__2()
{
/*
  // $tmpret0__2
*/
  __patsflab_patsopt_command:
  $tmpret0__2 = "patsopt";
  return $tmpret0__2;
} // end-of-function


function
atslangweb__patsopt_ccats_cont__20__1($arg0)
{
/*
  // $tmpret73__1
  // $tmp74__1
*/
  __patsflab_patsopt_ccats_cont:
  $tmp74__1 = atslangweb__tmpfile2string($arg0);
  $tmpret73__1 = array(0, $tmp74__1);
  return $tmpret73__1;
} // end-of-function


function
atslangweb_patsopt_ccats_code_1_($arg0)
{
/*
  // $tmpret77
  // $tmp78
*/
  __patsflab_patsopt_ccats_code_1_:
  $tmp78 = sprintf("%s\n%s\n%s\n", $GLOBALS['atslangweb_patsopt_ccats_preamble'], $arg0, $GLOBALS['atslangweb_patsopt_ccats_postamble']);
  $tmpret77 = atslangweb_patsopt_ccats_code_0_($tmp78);
  return $tmpret77;
} // end-of-function


function
atslangweb_patsopt_atscc2js_code_0_($arg0)
{
/*
  // $tmpret79
*/
  __patsflab_patsopt_atscc2js_code_0_:
  $tmpret79 = atslangweb__patsopt_ccats_code__13__2($arg0);
  return $tmpret79;
} // end-of-function


function
atslangweb__patsopt_ccats_code__13__2($arg0)
{
/*
  // $tmpret36__2
  // $tmp37__2
  // $tmp38__2
  // $tmp39__2
*/
  __patsflab_patsopt_ccats_code:
  $tmp37__2 = atslangweb__tmpfile_make_string("patsopt_ccats_", $arg0);
  $tmp38__2 = atslangweb__patsopt_ccats_file__15__2($tmp37__2);
  $tmp39__2 = atslangweb__tmpfile_unlink($tmp37__2);
  $tmpret36__2 = $tmp38__2;
  return $tmpret36__2;
} // end-of-function


function
atslangweb__patsopt_ccats_file__15__2($arg0)
{
/*
  // $tmpret44__2
  // $tmp45__2
  // $tmp46__2
  // $tmp47__2
  // $tmp48__2
  // $tmp49__2
  // $tmp50__2
  // $tmp51__2
  // $tmp52__2
  // $tmp53__2
  // $tmp54__2
  // $tmp55__2
*/
  __patsflab_patsopt_ccats_file:
  $tmp45__2 = atslangweb__tmpfile_make_nil("patsopt_ccats_");
  $tmp46__2 = atslangweb__tmpfile_make_nil("patsopt_ccats_");
  $tmp47__2 = atslangweb__patsopt_ccats_command__17__2($arg0, $tmp45__2, $tmp46__2);
  $tmp48__2 = atslangweb_exec_retval($tmp47__2);
  $tmp50__2 = ats2phppre_eq_int0_int0($tmp48__2, 0);
  if($tmp50__2) {
    $tmp51__2 = atslangweb__patsopt_ccats_cont__24__1($tmp45__2);
    $tmp52__2 = atslangweb__tmpfile_unlink($tmp45__2);
    $tmp49__2 = $tmp51__2;
  } else {
    $tmp53__2 = atslangweb__tmpfile2string($tmp46__2);
    $tmp54__2 = atslangweb__tmpfile_unlink($tmp45__2);
    $tmp49__2 = array(1, $tmp53__2);
  } // endif
  $tmp55__2 = atslangweb__tmpfile_unlink($tmp46__2);
  $tmpret44__2 = $tmp49__2;
  return $tmpret44__2;
} // end-of-function


function
atslangweb__patsopt_ccats_command__17__2($arg0, $arg1, $arg2)
{
/*
  // $tmpret68__2
  // $tmp69__2
*/
  __patsflab_patsopt_ccats_command:
  $tmp69__2 = atslangweb__patsopt_command__0__3();
  $tmpret68__2 = sprintf("%s 2>%s --output %s --dynamic %s", $tmp69__2, $arg2, $arg1, $arg0);
  return $tmpret68__2;
} // end-of-function


function
atslangweb__patsopt_command__0__3()
{
/*
  // $tmpret0__3
*/
  __patsflab_patsopt_command:
  $tmpret0__3 = "patsopt";
  return $tmpret0__3;
} // end-of-function


function
atslangweb__patsopt_ccats_cont__24__1($arg0)
{
/*
  // $tmpret80__1
*/
  __patsflab_patsopt_ccats_cont:
  $tmpret80__1 = atslangweb__atscc2js_comp_file__30__1($arg0);
  return $tmpret80__1;
} // end-of-function


function
atslangweb__atscc2js_comp_file__30__1($arg0)
{
/*
  // $tmpret101__1
  // $tmp102__1
  // $tmp103__1
  // $tmp104__1
  // $tmp105__1
  // $tmp106__1
  // $tmp107__1
  // $tmp108__1
  // $tmp109__1
  // $tmp110__1
  // $tmp111__1
  // $tmp112__1
*/
  __patsflab_atscc2js_comp_file:
  $tmp102__1 = atslangweb__tmpfile_make_nil("atscc2js_comp_");
  $tmp103__1 = atslangweb__tmpfile_make_nil("atscc2js_comp_");
  $tmp104__1 = atslangweb__atscc2js_comp_command__32__1($arg0, $tmp102__1, $tmp103__1);
  $tmp105__1 = atslangweb_exec_retval($tmp104__1);
  $tmp107__1 = ats2phppre_eq_int0_int0($tmp105__1, 0);
  if($tmp107__1) {
    $tmp108__1 = atslangweb__tmpfile2string($tmp102__1);
    $tmp109__1 = atslangweb__tmpfile_unlink($tmp102__1);
    $tmp106__1 = array(0, $tmp108__1);
  } else {
    $tmp110__1 = atslangweb__tmpfile2string($tmp103__1);
    $tmp111__1 = atslangweb__tmpfile_unlink($tmp102__1);
    $tmp106__1 = array(1, $tmp110__1);
  } // endif
  $tmp112__1 = atslangweb__tmpfile_unlink($tmp103__1);
  $tmpret101__1 = $tmp106__1;
  return $tmpret101__1;
} // end-of-function


function
atslangweb__atscc2js_comp_command__32__1($arg0, $arg1, $arg2)
{
/*
  // $tmpret125__1
  // $tmp126__1
*/
  __patsflab_atscc2js_comp_command:
  $tmp126__1 = atslangweb__atscc2js_command__1__1();
  $tmpret125__1 = sprintf("%s 2>%s --output %s --input %s", $tmp126__1, $arg2, $arg1, $arg0);
  return $tmpret125__1;
} // end-of-function


function
atslangweb__atscc2js_command__1__1()
{
/*
  // $tmpret1__1
*/
  __patsflab_atscc2js_command:
  $tmpret1__1 = "atscc2js";
  return $tmpret1__1;
} // end-of-function


function
atslangweb_patsopt_atscc2js_code_1_($arg0)
{
/*
  // $tmpret130
  // $tmp131
*/
  __patsflab_patsopt_atscc2js_code_1_:
  $tmp131 = sprintf("%s\n%s\n%s\n", $GLOBALS['atslangweb_patsopt_atscc2js_preamble'], $arg0, $GLOBALS['atslangweb_patsopt_atscc2js_postamble']);
  $tmpret130 = atslangweb_patsopt_atscc2js_code_0_($tmp131);
  return $tmpret130;
} // end-of-function


function
atslangweb_pats2xhtml_eval_code_0_($arg0, $arg1)
{
/*
  // $tmpret132
*/
  __patsflab_pats2xhtml_eval_code_0_:
  $tmpret132 = atslangweb__pats2xhtml_eval_code__37__1($arg0, $arg1);
  return $tmpret132;
} // end-of-function


function
atslangweb__pats2xhtml_eval_code__37__1($arg0, $arg1)
{
/*
  // $tmpret133__1
  // $tmp134__1
  // $tmp135__1
  // $tmp136__1
*/
  __patsflab_pats2xhtml_eval_code:
  $tmp134__1 = atslangweb__tmpfile_make_string("pats2xhtml_", $arg1);
  $tmp135__1 = atslangweb__pats2xhtml_eval_file__39__1($arg0, $tmp134__1);
  $tmp136__1 = atslangweb__tmpfile_unlink($tmp134__1);
  $tmpret133__1 = $tmp135__1;
  return $tmpret133__1;
} // end-of-function


function
atslangweb__pats2xhtml_eval_file__39__1($arg0, $arg1)
{
/*
  // $tmpret141__1
  // $tmp142__1
  // $tmp143__1
  // $tmp144__1
  // $tmp145__1
  // $tmp146__1
  // $tmp147__1
  // $tmp148__1
  // $tmp149__1
  // $tmp150__1
  // $tmp151__1
  // $tmp152__1
*/
  __patsflab_pats2xhtml_eval_file:
  $tmp142__1 = atslangweb__tmpfile_make_nil("pats2xhtml_");
  $tmp143__1 = atslangweb__tmpfile_make_nil("pats2xhtml_");
  $tmp144__1 = atslangweb__pats2xhtml_eval_command__41__1($arg0, $arg1, $tmp142__1, $tmp143__1);
  $tmp145__1 = atslangweb_exec_retval($tmp144__1);
  $tmp147__1 = ats2phppre_eq_int0_int0($tmp145__1, 0);
  if($tmp147__1) {
    $tmp148__1 = atslangweb__tmpfile2string($tmp142__1);
    $tmp149__1 = atslangweb__tmpfile_unlink($tmp142__1);
    $tmp146__1 = array(0, $tmp148__1);
  } else {
    $tmp150__1 = atslangweb__tmpfile2string($tmp143__1);
    $tmp151__1 = atslangweb__tmpfile_unlink($tmp142__1);
    $tmp146__1 = array(1, $tmp150__1);
  } // endif
  $tmp152__1 = atslangweb__tmpfile_unlink($tmp143__1);
  $tmpret141__1 = $tmp146__1;
  return $tmpret141__1;
} // end-of-function


function
atslangweb__pats2xhtml_eval_command__41__1($arg0, $arg1, $arg2, $arg3)
{
/*
  // $tmpret165__1
  // $tmp166__1
  // $tmp167__1
  // $tmp168__1
*/
  __patsflab_pats2xhtml_eval_command:
  $tmp166__1 = atslangweb__pats2xhtml_command__2__1();
  $tmp168__1 = ats2phppre_eq_int0_int0($arg0, 0);
  if($tmp168__1) {
    $tmp167__1 = "--static";
  } else {
    $tmp167__1 = "--dynamic";
  } // endif
  $tmpret165__1 = sprintf("%s 2>%s --embedded --output %s %s %s", $tmp166__1, $arg3, $arg2, $tmp167__1, $arg1);
  return $tmpret165__1;
} // end-of-function


function
atslangweb__pats2xhtml_command__2__1()
{
/*
  // $tmpret2__1
*/
  __patsflab_pats2xhtml_command:
  $tmpret2__1 = "pats2xhtml";
  return $tmpret2__1;
} // end-of-function

/* ****** ****** */

/* end-of-compilation-unit */
?>
