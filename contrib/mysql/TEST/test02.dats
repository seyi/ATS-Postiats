//
// Testing ATS API for mysql
//
(* ****** ****** *)

staload
UN = "prelude/SATS/unsafe.sats"

(* ****** ****** *)
//
staload "mysql/SATS/mysql.sats"
//
(* ****** ****** *)

#define some stropt_some
#define none stropt_none

(* ****** ****** *)

implement
main () = let
  val [l:addr]
    conn = mysql_init0 ()
  val perr = MYSQLptr2ptr (conn)
  val () = fprint_mysql_error (stderr_ref, conn)
//
  val () = assertloc (perr > null)
//
// mysql -h -P6401 -uyihaodian yihaodian -p eulerats
//
  val host = some"instance25306.db.xeround.com"
  val user = some"yihaodian"
  val pass = some"eulerats"
  val port = 6401U
  val perr = mysql_real_connect
    (conn, host, user, pass, none, port, none, 0UL)
  val () = fprint_mysql_error (stderr_ref, conn)
//
  val () = assertloc (perr > null)
//
  val info = mysql_get_host_info (conn)
  val () = fprintf (stdout_ref, "host info: %s\n", @(info))
  val proto = mysql_get_proto_info (conn)
  val () = fprintf (stdout_ref, "proto info: %u\n", @(proto))
//
  val info = mysql_get_server_info (conn)
  val () = fprintf (stdout_ref, "server info: %s\n", @(info))
  val version = mysql_get_server_version (conn)
  val () = fprintf (stdout_ref, "server info: %lu\n", @(version))
//
  val qry = "create database testdb"
  val ierr = mysql_query (conn, $UN.cast{query}(qry))
  val () = fprint_mysql_error (stderr_ref, conn)
  val () = assertloc (ierr = 0)
//
  val qry = "drop database testdb"
  val ierr = mysql_query (conn, $UN.cast{query}(qry))
  val () = fprint_mysql_error (stderr_ref, conn)
  val () = assertloc (ierr = 0)
//
  val () = mysql_close (conn)
in
  // nothing
end // end of [main]

(* ****** ****** *)

(* end of [test02.dats] *)
