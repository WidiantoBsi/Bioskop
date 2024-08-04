<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
function generate_sidemenu()
{
 return '<ul class="nav nav-list">
 <li><div class="left-bg"></div></li>
 <li class="time">
 <h1 class="animated fadeInLeft">21:00</h1>
 <p class="animated fadeInRight">Sat,October 1st 2029</p>
 </li>
 <li class="active">
 <a class="tree-toggle nav-header"><span class="fa-street-view fa"></span> Cutomer 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Customer').'"><i class="fa fa-list-alt"></i> Customer List</a></li>
 <li><a href="'.site_Url('Customer/Tambah').'"><i class="fa fa-plus-square-o"></i> Customer Add</a></li>
 </ul>
 </li>
 <li class=" ">
 <a class="tree-toggle nav-header"><span class="fa fa-user-secret"></span> Pegawai 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Petugas').'"><i class="fa fa-list-alt"></i> Pegawai List</a></li>
 <li><a href="'.site_Url('Petugas/Tambah').'"><i class="fa fa-plus-square-o"></i> Pegawai Add</a></li>
 </ul>
 </li>
 <li class=" ">
 <a class="tree-toggle nav-header"><span class="fa fa-film"></span> Film 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Film').'"><i class="fa fa-list-alt"></i> Film List</a></li>
 <li><a href="'.site_Url('Film/Tambah').'"><i class="fa fa-plus-square-o"></i> Film Add</a></li>
 </ul>
 </li>
 <li class="  ">
 <a class="tree-toggle nav-header"><span class="fa fa-safari"></span> Jadwal 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Jadwal').'"><i class="fa fa-list-alt"></i> Jadwal List</a></li>
 <li><a href="'.site_Url('Jadwal/Tambah').'"><i class="fa fa-plus-square-o"></i> Jadwal Add</a></li>
 </ul>
 </li>
 <li class="  ">
 <a class="tree-toggle nav-header"><span class="fa-bank fa"></span> Studio 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Studio').'"><i class="fa fa-list-alt"></i> Studio List</a></li>
 <li><a href="'.site_Url('Studio/Tambah').'"><i class="fa fa-plus-square-o"></i> Studio Add</a></li>
 </ul>
 </li>
 <li class=" ">
 <a class="tree-toggle nav-header"><span class="fa fa-wheelchair"></span> Kursi 
 <span class="fa-angle-right fa right-arrow text-right"></span>
 </a>
 <ul class="nav nav-list tree">
 <li><a href="'.site_Url('Kursi').'"><i class="fa fa-list-alt"></i> Kursi List</a></li>
 <li><a href="'.site_Url('Kursi/Tambah').'"><i class="fa fa-plus-square-o"></i> Kursi Add</a></li>
 </ul>
 </li>
 <li class=" "><a href="'.site_Url('Tiket').'"><span class="fa fa-ticket"></span>Tiket</a></li>
 </ul>';
}
function generate_sidemenu_Kasir()
{
	return '<ul class="nav nav-list">
 <li><div class="left-bg"></div></li>
 <li class="time">
 <h1 class="animated fadeInLeft">21:00</h1>
 <p class="animated fadeInRight">Sat,October 1st 2029</p>
 </li>
 <li class="active"><a href="'.site_Url('Tiket').'"><span class="fa fa-ticket"></span>Tiket</a></li>
 </ul>';
}
function generate_sidemenu_view()
{
 return '
 <ul>
 <li><a href="'.site_Url('Home_Movies').'"><i class="home"></i></a></li>
 <li><a href="'.site_Url('Book_Tiket').'"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
 <li><a href="'.site_Url('Book_Tiket_List').'"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
 </ul>';
}
?>