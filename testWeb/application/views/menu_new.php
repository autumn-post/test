<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>펼침 메뉴</title>


<!-- Style 설정 시작 -->

<style type="text/css"> 
<!--
A
{
    color:black;
    text-decoration:none
}

A:active
{
    color:red;
    text-decoration:none
}

A:visited
{
    color:black;
    text-decoration:none
}

A:hover
{
    color:black;
    text-decoration:underline
}
-->
</style>

<!-- Style 종료 -->



<!-- 자바 스크립트 시작 -->

<script language="JavaScript">
<!--

//-----------------------------------------------------------------------------------------------------------------------//
// 자바 스크립트
//-----------------------------------------------------------------------------------------------------------------------//
//
// 특정 ID 값을 가진 개체를 숨기거나 표시하는데 사용하는 함수
//
// group_no : 하위 메뉴 그룹 번호 /  num : 하위 메뉴 그룹의 구성원 수
//
//-----------------------------------------------------------------------------------------------------------------------//

function toggle_submenu( group_no, num )
{
	// 임시 개체 변수를 null 로 정의한다.
	var element = null;

	//하위 메뉴 그룹의 모든 구성원에 대하여 다음 작업을 수행한다.
	for( var i = 1; i <= num; i++ )
	{
		// 현재 구성원의 개체 값을 임시 개체 변수에 저장한다.
		element = document.getElementById( "submenu_group_" + group_no + "_" + i );
	
		// 개체가 존재한다면 다음 작업을 수행한다.
		if ( element != null )
		{
			// 보임 상태라면 숨김 상태로, 숨김 상태라면 보임 상태로 전환한다.
			( element.style.display != "none" ) ? element.style.display = "none" : element.style.display = "";
		}
	}

	// 함수 작업을 명시적으로 종료한다.
	return;
}

//-----------------------------------------------------------------------------------------------------------------------//
// 자바 스크립트
//-----------------------------------------------------------------------------------------------------------------------//
//
// 이미지 A 를 클릭 했을 때는 이미지 B 로 전환하고, 다시 이미지 B 를 클릭 했을 때는 이미지 A 로 전환하는데 사용하는 함수
//
// name : 이미지 식별자 / src_a : 이미지 A 의 경로 / src_b : 이미지 B 의 경로
//
//-----------------------------------------------------------------------------------------------------------------------//

function toggle_img_src( name, src_a, src_b )
{

	// 매개 변수로 전달받은 이미지 식별자를 이용하여 임시 전역 식별자를 생성한다.
	var img = eval('document.' + name);
	
	// 이미지 식별자가 없다면, 함수를 빠져 나간다.
	if( img.length == 0 ) return;
	
	// 이미지 A 를 클릭한 경우 (이미지 경로 정보에 이미지 A 의 경로가 포함되어 있을 경우)
	if ( img.src.indexOf( src_a ) >= 0 )
	{
		// 이미지 B 로 전환한다.
		img.src = src_b;
		return;
	}
	
	// 이미지 B 를 클릭한 경우 (이미지 경로 정보에 이미지 B 의 경로가 포함되어 있을 경우)
	if ( img.src.indexOf( src_b ) >= 0 )
	{
		// 이미지 A 로 전환한다.
		img.src = src_a;	
		return;
	}
	
	// 함수 종료
	return;
}

-->
</script>

<!-- 자바 스크립트 종료 -->



</head>



<!-- 본문 시작 -->

<body>

<table border="0" width="200" cellpadding="0" cellspacing="0" style="line-height:100%; margin-top:0; margin-bottom:0;" align="center">
    <tr>
        <td width= "15" height= "16" align="left" background= "../../../images/lm_line_top_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" background="../../../images/lm_line_top.gif" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_top_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" align="left"height="30" background="../../../images/lm_line_title.gif" colspan="3">
            <b><span style="font-family: gulim; font-size:10pt; color:#677AFB">게임 소개</span></b></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
        
    <tr>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_doc_b.gif" width="10" height="13" border="0"></span></td>
        <td width="145" height= "30" align="left" valign="middle">
            <b><span style="font-family: gulim; font-size:10pt;">액션</span></b></td>
        <td width= "10" height= "30" align="center" valign="middle">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/arrow_hide_b.gif" width="7" height="11" border="0" name="arrow_toggle_01" OnClick="toggle_submenu(1, 6); toggle_img_src( 'arrow_toggle_01', '../../../images/arrow_show_b.gif', '../../../images/arrow_hide_b.gif');" style="cursor:pointer"></span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_1_1" style="">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">수퍼 마리오</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_1_2" style="">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">별의 카비</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_1_6" style="">
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_doc_b.gif" width="10" height="13" border="0"></span></td>
        <td width="145" height= "30" align="left" valign="middle">
            <b><span style="font-family: gulim; font-size:10pt;">롤플레잉</span></b></td>
        <td width= "10" height= "30" align="center" valign="middle">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/arrow_show_b.gif" width="7" height="11" border="0" name="arrow_toggle_02" OnClick="toggle_submenu(2, 9); toggle_img_src( 'arrow_toggle_02', '../../../images/arrow_show_b.gif', '../../../images/arrow_hide_b.gif' );" style="cursor:pointer"></span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_2_1" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">드래곤 퀘스트</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_2_2" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">파이널 판타지</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td> </tr>
    <tr id="submenu_group_2_9" style="display:none;">
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_doc_b.gif" width="10" height="13" border="0"></span></td>
        <td width="145" height= "30" align="left" valign="middle">
            <b><span style="font-family: gulim; font-size:10pt;">어드벤처</span></b></td>
        <td width= "10" height= "30" align="center" valign="middle">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/arrow_show_b.gif" width="7" height="11" border="0" name="arrow_toggle_03" OnClick="toggle_submenu(3, 4); toggle_img_src( 'arrow_toggle_03', '../../../images/arrow_show_b.gif', '../../../images/arrow_hide_b.gif' );" style="cursor:pointer"></span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_3_1" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">원숭이 섬의 비밀</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_3_2" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">매니악 맨션</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_3_4" style="display:none;">
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_doc_b.gif" width="10" height="13" border="0"></span></td>
        <td width="145" height= "30" align="left" valign="middle">
            <b><span style="font-family: gulim; font-size:10pt;">시뮬레이션</span></b></td>
        <td width= "10" height= "30" align="center" valign="middle">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/arrow_show_b.gif" width="7" height="11" border="0" name="arrow_toggle_04" OnClick="toggle_submenu(4, 3); toggle_img_src( 'arrow_toggle_04', '../../../images/arrow_show_b.gif', '../../../images/arrow_hide_b.gif' );" style="cursor:pointer"></span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_4_1" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">팰콘 3.0</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr id="submenu_group_4_2" style="display:none;">
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "30" align="left">
            <span style="font-family: gulim; font-size:10pt;"><img src="../../../images/icon_sub_menu.gif" width="10" height="11" border="0"></span></td>
        <td width="155" height= "30" align="left" valign="middle" colspan="2">
            <span style="font-family: gulim; font-size:10pt;">아파치 롱보우</span></td>
        <td width= "15" height= "30" align="left" background="../../../images/lm_line_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
    <tr>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_bottom_left.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width="170" height= "16" align="left" background="../../../images/lm_line_bottom.gif" colspan="3">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td>
        <td width= "15" height= "16" align="left" background="../../../images/lm_line_bottom_right.gif">
            <span style="font-family: gulim; font-size:10pt;">&nbsp;</span></td></tr>
</table>


</body>


<!-- 본문 종료 -->



</html>
