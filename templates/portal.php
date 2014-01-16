<style>
    /*
    @media (max-width: 1250px) {
        table.timepie div.arrow {
            display: none;
        }
    }
    */
    table.timepie {
        border-collapse: collapse;
        font-size: 12pt;
        width: 100%;
    }

    table.timepie td {
        padding: 7px;
        vertical-align: top;
    }

    table.timepie td.done {
        color: #CCCCCC;
    }

    table.timepie tfoot td {
        color: white;
    }

    table.timepie td.selected_text {
        font-weight: bold;
        border-top: 2px solid black;
        border-left: 2px solid black;
        border-right: 2px solid black;
        background-color: #BBBBBB;
    }

    table.timepie td.selected_arrow {
        font-weight: bold;
        border-left: 2px solid black;
        border-right: 2px solid black;
        background-color: #BBBBBB;
    }

    table.timepie div.arrow {
        line-height: 15pt;
        font-weight: normal;
        font-size: 26pt;
    }

    table.timepie div.info {
    }

    table.timepie td.develop {
        background-color: #008800;
    }

    table.timepie td.codefreeze {
        background-color: #880000;
    }
</style>

<table class="timepie">
    <tbody>
        <tr>
            <? $n = 0;foreach ($timeline as $date => $text) : ?>
            <td <?= ($date > strtotime('+1 day') && $n++ == 0) ? 'class="selected_text"' : ($n == 0 ? 'class="done"' : '') ?>>
                <div class="info">
                    <?= sprintf($text, date('d.m.Y', $date)) ?>
                </div>
            </td>
            <? endforeach ?>
        </tr>
        <tr>
            <? $n= 0;foreach ($timeline as $date => $text) : ?>
            <td <?= ($date > strtotime('+1 day') && $n++ == 0) ? 'class="selected_arrow"' : ($n == 0 ? 'class="done"' : '') ?>>
                <div class="arrow">
                    &#8680; 
                </div>
            </td>
            <? endforeach ?>
        </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3" class="develop">
            Entwicklung - beliebige TICs, Bugfixes und angenommene StEPs dürfen eingecheckt werden.
        </td>
        <td colspan="2" class="codefreeze">
            Codefreeze - nur noch Bugfixes dürfen eingecheckt werden!
        </td>
        <td colspan="3" class="develop">
            Entwicklung - beliebige TICs, Bugfixes und angenommene StEPs dürfen eingecheckt werden.
    </tr>
    </tfoot>
</table>
