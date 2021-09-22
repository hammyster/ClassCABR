<?php
// Modo de Usar
require("class.php");
$nickname = "Hammy";

echo "Criação da Conta: "; $CA->SearchCreatedInFromNickname($nickname);
echo "EXP: "; $CA->SearchExpFromNickname($nickname); 
echo "Kills: "; $CA->SearchKillsFromNickname($nickname);
echo "Deaths: "; $CA->SearchDeathsFromNickname($nickname);
echo "HS: "; $CA->SearchHSFromNickname($nickname);
echo "Conta banida: "; $CA->SearchBanishmentFromNickname($nickname);
