<?php
function bersihkan($teks)
{
    return htmlspecialchars($teks ?? "", ENT_QUOTES, "UTF-8");
}