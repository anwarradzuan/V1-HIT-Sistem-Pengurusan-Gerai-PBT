<?php
switch(url::get(2))
{
	case "ajax":
		Page::Load("pages/dashboards/ajaxs/ajax");
	break;

}



