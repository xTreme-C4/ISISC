<?php
$nb_groupe = 8;

# Liste des districts
$district = array(
    ''                                               => '',
    'Montréal'                                       => 'mon',
    'L\'érable'                                      => 'd02',
    'Atlantique'                                     => 'd04',
    'Monteregie'                                     => 'd10',
    'Horizon Boréal (Quebec)'                        => 'que',
    'Je ne trouve pas mon district dans la liste.'   => 'Nope',
);

# District Montérégie
$groupe['d10'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '008' => array('name' => '[Monteregie] 8e Acton Vale', 'groupe' => '008', 'district' => 'd10'),
    '009' => array('name' => '[Monteregie] 9e St-Thomas de Villeneuve (Saint-Hubert)', 'groupe' => '009', 'district' => 'd10'),
    '019' => array('name' => '[Monteregie] 19e Saint-Hubert', 'groupe' => '019', 'district' => 'd10'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# District de Montréal
$groupe['mon'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '230' => array('name' => '[Montréal] 230e Saint-Antoine-Marie-Claret', 'groupe' => '230', 'district' => 'mon'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# District de l'Atlantique
$groupe['d04'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '002' => array('name' => '[Atlantique] 2e Scouts de Dieppe', 'groupe' => '002', 'district' => 'd04'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# District de Québec
$groupe['que'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '001' => array('name' => '[Québec] 1er Groupe scout de Sept-Iles', 'groupe' => '001', 'district' => 'que'),
    '002' => array('name' => '[Québec] 20e Groupe scout du Triangle', 'groupe' => '020', 'district' => 'que'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# District de L'Érable
$groupe['d02'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '001' => array('name' => '[L\'érable] 5e Groupe scout Coaticook', 'groupe' => '005', 'district' => 'd02'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# Types d'inscription possibles
$type = array(
    'Jeune Scout'             => array('type' => 'B', 'situation' => 'j'),
    'Jeune Scout d\'un jour'  => array('type' => 'J', 'situation' => 'j'),
    'Adulte Bénévole'         => array('type' => 'B', 'situation' => 'a'),
);
?>