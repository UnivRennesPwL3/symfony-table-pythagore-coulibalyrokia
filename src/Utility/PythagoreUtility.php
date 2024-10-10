<?php

namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1" cellspacing="0" cellpadding="5">';
        $html .= '<tr>';
        $html .= '<td>0</td>';

            for ($i = 1; $i <= 10; $i++) {
                $html .= "<th>$i</th>";
            }
        $html .= '</tr>';
            // Table de Pythagore

            for ($i = 1; $i <= 10; $i++) {
                $html .= "<tr>";
                $html .= "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    if ($i != $j) {
                        $html .= "<td>" . ($i * $j) . "</td>";
                    } else {
                        $html .= "<td>X</td>"; // Afficher X lorsque i == j
                    }
                }
                $html .= '</tr>';
            }
        $html .= '</table>';

        return $html;
    }
}