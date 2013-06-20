//
// Numbering input lines
//
// Author: Hongwei Xi (January, 2013)
//

(* ****** ****** *)

staload UN = "prelude/SATS/unsafe.sats"

(* ****** ****** *)

staload "libats/SATS/ML_basis.sats"
staload "libats/ML/SATS/list0.sats"
staload "libats/ML/SATS/filebas.sats"

(* ****** ****** *)

implement
main () = let
//
fun loop
(
  xs: list0 (string), n: int
) : void = let
in
//
case+ xs of
| list0_cons
    (x, xs) => let
    val islast = list0_is_nil (xs)
    val hasmore =
    (
      if islast
        then string_isnot_empty (x) else true
      // end of [if]
    ) : bool // end of [val]
    val () =
    if hasmore then
    {
      val () = if n > 0 then print_char ('\n')
      val () = print_int (n+1)
      val () = print_string (":\t")
      val () = print_string (x)
    } // end of [if] // end of [val]
  in
    loop (xs, n+1)
  end // end of [list0_cons]
| list0_nil () => ()
//
end // end of [loop]
//
val lines =
  fileref_get_lines_stringlst (stdin_ref)
val () = loop (lines, 0)
//
in
  0(*normal*)
end // end of [main]

(* ****** ****** *)

(* end of [linenum.dats] *)
