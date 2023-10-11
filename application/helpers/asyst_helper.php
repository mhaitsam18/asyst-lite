<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $roleid = $ci->session->userdata('roleid');
        $menuname = $ci->uri->segment(1);
        $queryMenu = $ci->db->get_where('mgt_menu', ['REPLACE(menuname, " ", "") =' => $menuname])->row_array();
        // $menuid = $queryMenu['menuid'];
        // $userAccess = $ci->db->get_where('mgt_role_menu', ['roleid' => $roleid, 'menuid' => $menuid]);
        // if ($userAccess->num_rows() < 1) {
        //     redirect('auth/blocked');
        // }
    }
}
function check_access($roleid, $menuid)
{
    $ci = get_instance();

    $ci->db->where('roleid', $roleid);
    $ci->db->where('menuid', $menuid);
    $result = $ci->db->get('mgt_role_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function cari_tanggal($tanggal)
{
    $bulan = '';
    switch (date('n', strtotime($tanggal))) {
        case 1:
            $bulan = 'Januari';
            break;
        case 2:
            $bulan = 'Februari';
            break;
        case 3:
            $bulan = 'Maret';
            break;
        case 4:
            $bulan = 'April';
            break;
        case 5:
            $bulan = 'Mei';
            break;
        case 6:
            $bulan = 'Juni';
            break;
        case 7:
            $bulan = 'Juli';
            break;
        case 8:
            $bulan = 'Agustus';
            break;
        case 9:
            $bulan = 'September';
            break;
        case 10:
            $bulan = 'Okteber';
            break;
        case 11:
            $bulan = 'November';
            break;
        case 12:
            $bulan = 'Desember';
            break;
    }

    return date('j', strtotime($tanggal)) . " $bulan " . date('Y', strtotime($tanggal));
}
