<?php
/*
 * ������ ����������

 * ���������� ����������� �� ����� ����� (���� �� ���������) �� �����  / � �������������� ��� ����.
 * ���� ������� ���������� ��������� ������ �����, �� ��������������� ������ ��������

 * charset="UTF-8"
 */

return array(
    // CDR audio file
    'monitor_dir'    => '/cdr/monitor',   // ����� �������
    'autoinform_dir' => '/cdr/monitor', // ����� ������� autoinform

    'file_format'  => 'wav',            // ������ ������� (��� �����)

    'another_base' => 0,                // ���� ������� cdr ���������� � ������ ����, �� 1
    'database'     => array(
        'host'   => 'localhost',
        'user'   => 'admin',
        'pass'   => 'almazov123321',
        'dbname' => 'asterix',
    ),
);
