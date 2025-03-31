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

# District de L'Érable
$groupe['d02'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '001' => array('name' => '[L\'érable] 1er Scouts Drummondville', 'groupe' => '001', 'district' => 'd02'),
    '005' => array('name' => '[L\'érable] 5e Groupe scout Coaticook', 'groupe' => '005', 'district' => 'd02'),
    '010' => array('name' => '[L\'érable] 10e Est-Calade', 'groupe' => '010', 'district' => 'd02'),
    '022' => array('name' => '[L\'érable] 22e Harfang des Neiges', 'groupe' => '022', 'district' => 'd02'),
    '024' => array('name' => '[L\'érable] 24e Des Sources', 'groupe' => '024', 'district' => 'd02'),
    '047' => array('name' => '[L\'érable] 47e Rock Forest', 'groupe' => '047', 'district' => 'd02'),
    '048' => array('name' => '[L\'érable] 48e Les Rassembleurs de St-Élie', 'groupe' => '048', 'district' => 'd02'),
    '253' => array('name' => '[L\'érable] 53e St-Célestin', 'groupe' => '253', 'district' => 'd02'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# District de l'Atlantique
$groupe['d04'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '002' => array('name' => '[Atlantique] 2e Scouts de Dieppe', 'groupe' => '002', 'district' => 'd04'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
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

# District de Québec
$groupe['que'] = array(
    ''    => array('name' => '', 'groupe' => '', 'district' => ''),
    '001' => array('name' => '[Québec] 1er Groupe scout de Sept-Iles', 'groupe' => '001', 'district' => 'que'),
    '002' => array('name' => '[Québec] 20e Groupe scout du Triangle', 'groupe' => '020', 'district' => 'que'),
    '000' => array('name' => 'Mon groupe ne figure pas dans la liste.', 'groupe' => 'Nope', 'district' => 'Nope'),
);

# Types d'inscription possibles
$type = array(
    'Jeune Scout'             => array('type' => 'B', 'situation' => 'j'),
    'Jeune Scout d\'un jour'  => array('type' => 'J', 'situation' => 'j'),
    'Adulte Bénévole'         => array('type' => 'B', 'situation' => 'a'),
);
?>