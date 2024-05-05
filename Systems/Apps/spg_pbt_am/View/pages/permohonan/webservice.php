<?php
//webservice

switch(url::get(2))
{
	case "ajax":
		Page::Load("pages/permohonan/ajaxs/ajax");
	break;
	
	case "ajaxedit":
		Page::Load("pages/permohonan/ajaxs/ajaxedit");
	break;
	
	case "ajaxfetch":
		Page::Load("pages/permohonan/ajaxs/ajaxfetch");
	break;

	case "ajaxsearch":
		Page::Load("pages/permohonan/ajaxs/ajaxsearch");
	break;

	case "ajaxplace":
		Page::Load("pages/permohonan/ajaxs/ajaxplace");
	break;

	case "ajaxstatus":
		Page::Load("pages/permohonan/ajaxs/ajaxstatus");
	break;
	
	case "renewstatus":
		Page::Load("pages/permohonan/ajaxs/renewstatus");
	break;
	
	case "renewedit":
		Page::Load("pages/permohonan/ajaxs/renewedit");
	break;
	
	case "renewselect":
		Page::Load("pages/permohonan/ajaxs/renewselect");
	break;
	
	case "renewlist":
		Page::Load("pages/permohonan/ajaxs/renewlist");
	break;
	
	case "renewcontract":
		Page::Load("pages/permohonan/ajaxs/renewcontract");
	break;
}



