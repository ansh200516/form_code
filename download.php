<?php

/*
function convert_smart_quotes($string) 
{ 
    $search = array(chr(145), 
                    chr(146), 
                    chr(147), 
                    chr(148), 
                    chr(151)); 
 
    $replace = array("'", 
                     "'", 
                     '"', 
                     '"', 
                     '-'); 
 
    return str_replace($search, $replace, $string); 
} 
*/

$department = htmlspecialchars($_POST["department"]);
$title =htmlspecialchars( $_POST["title"]);
$ltp =htmlspecialchars( $_POST["ltp"]);
$credits =htmlspecialchars( $_POST["credits"]);
$number =htmlspecialchars( $_POST["number"]);
$non_graded =htmlspecialchars( $_POST["non_graded"]);
$course_status =htmlspecialchars( $_POST["course_status"]);
$inst_core =htmlspecialchars( $_POST["inst_core"]);
$inst_core = ($inst_core == 1 ? 'Yes' : 'No'); 
$prog_linked_core =htmlspecialchars( $_POST["prog_linked_core"]);
$dept_core =htmlspecialchars( $_POST["dept_core"]);
$dept_elec =htmlspecialchars( $_POST["dept_elec"]);
$minor_core =htmlspecialchars( $_POST["minor_core"]);
$minor_elec =htmlspecialchars( $_POST["minor_elec"]);
$prog_core =htmlspecialchars( $_POST["prog_core"]);
$prog_elec =htmlspecialchars( $_POST["prog_elec"]);
$open_cat =htmlspecialchars( $_POST["open_cat"]);
$open_cat = ($open_cat == 1 ? 'Yes' : 'No'); 
$pre_req =htmlspecialchars( $_POST["pre_req"]);
$precluded =htmlspecialchars( $_POST["precluded"]);
$overlap_own =htmlspecialchars( $_POST["overlap_own"]);
$overlap_other =htmlspecialchars( $_POST["overlap_other"]);
$supersedes =htmlspecialchars( $_POST["supersedes"]);
$not_allowed =htmlspecialchars( $_POST["not_allowed"]);
$freq_offering =htmlspecialchars( $_POST["freq_offering"]);
$faculty =htmlspecialchars( $_POST["faculty"]);
$visiting = ($visiting == 1 ? 'Yes' : 'No'); 
$objectives = htmlspecialchars($_POST["objectives"]);
//Replace Microsoft Word version of single and double quotation marks
$objectives = iconv('UTF-8', 'ASCII//TRANSLIT', $objectives);
$contents = $_POST["contents"];
$contents = str_replace('<br />', '\line', $contents);
$contents = str_replace('</p>', '', $contents);
$contents = str_replace('<p>', '', $contents);
$lec_module_no = array_map('strval', $_POST["lec_module_no"]);
$lec_module_des = array_map('strval', $_POST["lec_module_des"]);
$lec_module_hrs = array_map('strval', $_POST["lec_module_hrs"]);
$tot_lecture_hr = htmlspecialchars($_POST["tot_lecture_hr"]);
$tute_module_no = array_map('strval', $_POST["tute_module_no"]);
$tute_module_des = array_map('strval', $_POST["tute_module_des"]);
$tute_module_hrs = array_map('strval', $_POST["tute_module_hrs"]);
$tot_tute_hr = htmlspecialchars($_POST["tot_tute_hr"]);
$prac_module_no = array_map('strval', $_POST["prac_module_no"]);
$prac_module_des = array_map('strval', $_POST["prac_module_des"]);
$prac_module_hrs = array_map('strval', $_POST["prac_module_hrs"]);
$tot_prac_hr = htmlspecialchars($_POST["tot_prac_hr"]);
$self_module_no = array_map('strval', $_POST["self_module_no"]);
$self_module_des = array_map('strval', $_POST["self_module_des"]);
$references =$_POST["references"];
$references = str_replace('<br />', '\line', $references);
$references = str_replace('<br/>', '\line', $references);
$references = str_replace('<br>', '\line', $references);
$references = str_replace('</br>', '\line', $references);
$references = str_replace('</p>', '\line', $references);
$references = str_replace('<p>', '', $references);
$references = html_entity_decode($references, ENT_QUOTES, "UTF-8");
//$references = htmlspecialchars($references);
//$references = convert_smart_quotes($references);
// replace Microsoft Word version of single  and double quotations marks (“ ” ‘ ’) with  regular quotes (' and ")
$references = iconv('UTF-8', 'ASCII//TRANSLIT', $references); 
$software =htmlspecialchars( $_POST["software"]);
$hardware =htmlspecialchars( $_POST["hardware"]);
$teaching_aids =htmlspecialchars( $_POST["teaching_aids"]);
$laboratory =htmlspecialchars( $_POST["laboratory"]);
$equipment =htmlspecialchars( $_POST["equipment"]);
$class_infra =htmlspecialchars( $_POST["class_infra"]);
$site_visits =htmlspecialchars( $_POST["site_visits"]);
$other_resources =htmlspecialchars( $_POST["other_resources"]);
$design_type =htmlspecialchars( $_POST["design_type"]);
$open_ended =htmlspecialchars( $_POST["open_ended"]);
$project_type =htmlspecialchars( $_POST["project_type"]);
$open_ended_lab =htmlspecialchars( $_POST["open_ended_lab"]);
$other_content =htmlspecialchars( $_POST["other_content"]);
$approval_status =htmlspecialchars( $_POST["approval_status"]);

//$sign_data1 = file_get_contents('https://hss.iitd.ac.in/sites/all/modules/course_template/sign_data1.txt');
//$date = date("d/m/Y");

/*
foreach ($module_no as $item) {
    echo $item; echo '<br/>';

}
*/
/*
echo $lec_module_no[0];
echo $lec_module_des[0];
echo $lec_module_hrs[0];
*/
//echo $lec_module_hrs[1];


$lecture_rtf ="";
$count = count($lec_module_no);
for ($i = 0; $i < $count; $i++) {
        $lecture_rtf .= '\trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\pard \ltrpar\qc \li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137  
{\rtlch\fcs1 \af56 \ltrch\fcs0 \cf0\insrsid1990889\charrsid1990889 \hich\af56\dbch\af757\loch\f56 '.$lec_module_no[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }
\pard\ltrpar\ql\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af56 \ltrch\fcs0 \f1\cf17\insrsid1990889\charrsid1990889 \hich\af56\dbch\af757\loch\f56 '.$lec_module_des[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }      \pard\ltrpar\qc\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af56 \ltrch\fcs0 \f1\cf17\insrsid1990889 \hich\af56\dbch\af757\loch\f56 '.$lec_module_hrs[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid3738953\charrsid2699898 \cell } 
\pard \ltrpar\ql \li0\ri0\widctlpar\intbl\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0 
{\rtlch\fcs1 \af56 
\ltrch\fcs0 \insrsid3738953 \hich\af56\dbch\af757\loch\f56                                 \trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\row \ltrrow}';

}


$tute_rtf ="";
$count = count($tute_module_no);
for ($i = 0; $i < $count; $i++) {
        $tute_rtf .= '\trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\pard \ltrpar\qc \li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137  {\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid1990889\charrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$tute_module_no[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }
\pard\ltrpar\ql\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid1990889\charrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$tute_module_des[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }      \pard\ltrpar\qc\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$tute_module_hrs[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid3738953\charrsid2699898 \cell } 
\pard \ltrpar\ql \li0\ri0\widctlpar\intbl\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0 
{\rtlch\fcs1 \af56 
\ltrch\fcs0 \insrsid3738953 \hich\af56\dbch\af757\loch\f56                                 \trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\row \ltrrow}';

}


$prac_rtf ="";
$count = count($prac_module_no);
for ($i = 0; $i < $count; $i++) {
        $prac_rtf .= '\trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\pard \ltrpar\qc \li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137  {\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid1990889\charrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$prac_module_no[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }
\pard\ltrpar\ql\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid1990889\charrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$prac_module_des[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid3738953\charrsid1990889 \cell }      \pard\ltrpar\qc\li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid1990889 \hich\af1\dbch\af757\loch\f56 '.$prac_module_hrs[$i].'}
{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid3738953\charrsid2699898 \cell } 
\pard \ltrpar\ql \li0\ri0\widctlpar\intbl\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0 
{\rtlch\fcs1 \af56 
\ltrch\fcs0 \insrsid3738953 \hich\af56\dbch\af757\loch\f56                                 \trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trftsWidth1\trftsWidthB3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid6951622\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 
\clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth1066\clcbpatraw8 \cellx840\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth7048\clcbpatraw8 \cellx7888\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 
\clcbpat8\cltxlrtb\clftsWidth3\clwWidth1832\clcbpatraw8 \cellx9720\row \ltrrow}';

}

$self_rtf ="";
$count = count($self_module_no);
for ($i = 0; $i < $count; $i++) {
     $self_rtf .= '\pard \ltrpar\qc \li0\ri0\sl100\slmult0\widctlpar\intbl\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 {
\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid5968826\charrsid5968826 \hich\af1\dbch\af40\loch\f56 '.$self_module_no[$i].'}{\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid10310234\charrsid5968826 \cell }\pard \ltrpar\ql \li0\ri0\sl100\slmult0\widctlpar\intbl
\tx720\wrapdefault\hyphpar0\aspalpha\aspnum\faauto\adjustright\rin0\lin0\pararsid4486137 {\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\cf17\insrsid5968826 \hich\af1\dbch\af40\loch\f56 '.$self_module_des[$i].'}{\rtlch\fcs1 \af1 \ltrch\fcs0 
\f1\cf17\insrsid10310234\charrsid5968826 \cell }\pard \ltrpar\ql \li0\ri0\widctlpar\intbl\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0 {\rtlch\fcs1 \af1 \ltrch\fcs0 \f1\insrsid10310234\charrsid5968826 \trowd \irow'.strval($i+2).'\irowband'.strval($i+2).'\ltrrow
\ts11\trgaph10\trleft-226\trkeep\trftsWidth3\trwWidth9946\trftsWidthB3\trftsWidthA3\trpaddl10\trpaddr10\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\tblrsid10310234\tblind-216\tblindtype3 \clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 
\clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth953\clcbpatraw8 \cellx727\clvertalt\clbrdrt\brdrs\brdrw10\brdrcf1 \clbrdrl\brdrs\brdrw10\brdrcf1 \clbrdrb\brdrs\brdrw10\brdrcf1 \clbrdrr
\brdrs\brdrw10\brdrcf1 \clcbpat8\cltxlrtb\clftsWidth3\clwWidth8993\clcbpatraw8 \cellx9720\row \ltrrow}';
}




//load the rtf template as a string
//$rtf = file_get_contents('https://hss.iitd.ac.in/sites/all/modules/course_template/course_template.rtf');
$rtf = file_get_contents('./course_template.rtf');

//replace placeholder text with content from database
$rtf = str_replace('[DEPARTMENT]', $department, $rtf);
$rtf = str_replace('[COURSE TITLE]', $title, $rtf);
$rtf = str_replace('[LTP]', $ltp, $rtf);
$rtf = str_replace('[CREDIT]', $credits, $rtf);
$rtf = str_replace('[COURSE NUMBER]', $number, $rtf);
$rtf = str_replace('[NON-GRADED-UNITS]', $non_graded, $rtf);
$rtf = str_replace('[COURSE STATUS]', $course_status, $rtf);
$rtf = str_replace('[INST CORE]', $inst_core, $rtf);
$rtf = str_replace('[PROG LINKED CORE]', $prog_linked_core, $rtf);
$rtf = str_replace('[DEPT CORE]', $dept_core, $rtf);
$rtf = str_replace('[DEPT ELEC]', $dept_elec, $rtf);
$rtf = str_replace('[MINOR CORE]', $minor_core, $rtf);
$rtf = str_replace('[MINOR ELEC]', $minor_elec, $rtf);
$rtf = str_replace('[PROG CORE]', $prog_core, $rtf);
$rtf = str_replace('[PROG ELEC]', $prog_elec, $rtf);
$rtf = str_replace('[OPEN CAT]', $open_cat, $rtf);
$rtf = str_replace('[PRE REQ]', $pre_req, $rtf);
$rtf = str_replace('[PRECLUDED]', $precluded, $rtf);
$rtf = str_replace('[OVERLAP OWN]', $overlap_own, $rtf);
$rtf = str_replace('[OVERLAP OTH]', $overlap_other, $rtf);
$rtf = str_replace('[SUPERSEDES]', $supersedes, $rtf);
$rtf = str_replace('[NOT ALLOWED]', $not_allowed, $rtf);
if($freq_offering == 1) {
    $rtf = str_replace('[EVERY SEM]', '1', $rtf);
    $rtf = str_replace('[I SEM]', '0', $rtf);
    $rtf = str_replace('[II SEM]', '0', $rtf);
    $rtf = str_replace('[EITHER SEM]', '0', $rtf);
}
elseif($freq_offering == 2) {
    $rtf = str_replace('[EVERY SEM]', '0', $rtf);
    $rtf = str_replace('[I SEM]', '1', $rtf);
    $rtf = str_replace('[II SEM]', '0', $rtf);
    $rtf = str_replace('[EITHER SEM]', '0', $rtf);
}
elseif($freq_offering == 3) {
    $rtf = str_replace('[EVERY SEM]', '0', $rtf);
    $rtf = str_replace('[I SEM]', '0', $rtf);
    $rtf = str_replace('[II SEM]', '1', $rtf);
    $rtf = str_replace('[EITHER SEM]', '0', $rtf);
}
elseif($freq_offering == 4) {
    $rtf = str_replace('[EVERY SEM]', '0', $rtf);
    $rtf = str_replace('[I SEM]', '0', $rtf);
    $rtf = str_replace('[II SEM]', '0', $rtf);
    $rtf = str_replace('[EITHER SEM]', '1', $rtf);
}
else {
    $rtf = str_replace('[EVERY SEM]', '0', $rtf);
    $rtf = str_replace('[I SEM]', '0', $rtf);
    $rtf = str_replace('[II SEM]', '0', $rtf);
    $rtf = str_replace('[EITHER SEM]', '0', $rtf);
}
$rtf = str_replace('[FACULTY]', $faculty, $rtf);
$rtf = str_replace('[VISITING]', $visiting, $rtf);
$rtf = str_replace('[OBJECTIVE]', $objectives, $rtf);
$rtf = str_replace('[CONTENTS]', $contents, $rtf);
$rtf = str_replace('[LECTURE OUTLINE]', $lecture_rtf, $rtf);
$rtf = str_replace('[TOT LECTURE HR]', $tot_lecture_hr, $rtf);
$rtf = str_replace('[TUTORIAL OUTLINE]', $tute_rtf, $rtf);
$rtf = str_replace('[TOT TUTE HR]', $tot_tute_hr, $rtf);
$rtf = str_replace('[PRACTICAL OUTLINE]', $prac_rtf, $rtf);
$rtf = str_replace('[TOT PRAC HR]', $tot_prac_hr, $rtf);
$rtf = str_replace('[SELF LEARNING]', $self_rtf, $rtf);
$rtf = str_replace('[REFERENCES]', $references, $rtf);
$rtf = str_replace('[SOFTWARE]', $software, $rtf);
$rtf = str_replace('[HARDWARE]', $hardware, $rtf);
$rtf = str_replace('[TEACHING AIDS]', $teaching_aids, $rtf);
$rtf = str_replace('[LABORATORY]', $laboratory, $rtf);
$rtf = str_replace('[EQUIPMENT]', $equipment, $rtf);
$rtf = str_replace('[CLASS INFRA]', $class_infra, $rtf);
$rtf = str_replace('[SITE VISITS]', $site_visits, $rtf);
$rtf = str_replace('[OTHER RESOURCES]', $other_resources, $rtf);
$rtf = str_replace('[DESIGN TYPE PROBLEMS]', $design_type, $rtf);
$rtf = str_replace('[OPEN ENDED PROBLEMS]', $open_ended, $rtf);
$rtf = str_replace('[PROJECT TYPE ACTIVITY]', $project_type, $rtf);
$rtf = str_replace('[OPEN ENDED LAB]', $open_ended_lab, $rtf);
$rtf = str_replace('[OTHER CONTENT TYPE]', $other_content, $rtf);
/*
if($approval_status >=2) {
	$rtf = str_replace('[SIGN]', $sign_data1, $rtf);
	$rtf = str_replace('[DATE]', $date, $rtf);
}
else {
	$rtf = str_replace('[SIGN]', '', $rtf);
	$rtf = str_replace('[DATE]', '', $rtf);
}
*/

$rtf = str_replace('[SIGN]', '', $rtf);
$rtf = str_replace('[DATE]', '', $rtf);


//and now serve the file as an rtf download:
Header("Content-type: application/rtf");
Header("Content-Disposition: attachment;filename=course_template_{$number}.rtf");
echo $rtf;
exit();

?>
