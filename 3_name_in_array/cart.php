<style>
    body {
        font-family: "Courier";
    }
    table {
        border: dashed 1px #ff3a44;
    }
    table tbody td:nth-child(1n+3) {
        text-align: right;
    }
</style>
<div>
    Я вас категорически приветствую!
</div>
<table>

<?php
/**
 * Created by PhpStorm.
 * User: rus
 * Date: 18.05.16
 * Time: 19:19
 */
    $summa = 0;
    $textTable = '';

    $products = array(
        [
                'name'      => '<a>   iPhone          </a>',
                'cost'      => 25500,
                'count'     => 1,
                'available' => false,
                'action'    => 20,
        ],
        array(
                'name'      =>  '   fmModule         _',
                'cost'      => 1500,
                'count'     => 2,
                'available' => true,
        ),
        array(
                'name'      => '   packet          _',
                'cost'      => 15,
                'count'     => 11,
                'available' => true,
        ),
        [
            'name'      => '   Bently (model)',
            'cost'      => 150,
            'count'     => 1,
            'available' => true,
            'action'    => 100,
        ]
    );
//print_r($products);

?>
    <thead>
        <tr> <td style="width:10px;">#</td> <td>Name</td> <td>Cost</td> <td>Count</td><td>Sum</td><td>Available</td><td>Sale</td></tr>
    </thead>
    <tbody>
<?php
    const COL_LINE = '</td><td>';
    const BEGIN_ROW = '<tr><td>';
    const END_ROW = '</td></tr>';




for ($i = 0;$i < count($products);$i++)
{
    $textAvailable = 'товар ' . ($products[$i]['available'] ? 'готово к отгрузке' : 'ждем поставки');

    $action = array_key_exists( 'action', $products[$i] ) ? (100 - $products[$i]['action']) / 100 : 1;

    $summaProduct = $products[$i]['cost'] * $products[$i]['count'] * $action;

    $textTable .= BEGIN_ROW. ($i + 1);

    foreach ($products[$i] as $key => $value)
    {
       switch ($key)
       {
         case 'count':
             $textTable.= COL_LINE . $value . COL_LINE . $summaProduct;
               break;
         case 'available' :
             $textTable.= COL_LINE . $textAvailable;
               break;
           default:
               $textTable.= COL_LINE . $value;

       }
    }
    $textTable .=   END_ROW;

    $summa += $summaProduct;

}

if (isset( $_REQUEST['name'])) {
// echo print_r($_REQUEST);
     array_multisort($_REQUEST['cost'],SORT_ASC,$_REQUEST['name'],$_REQUEST['count'],$_REQUEST['action']) ; 
    for ($b = 0; $b < count($_REQUEST['cost']); $b++) {

        $summaProduct_r = $_REQUEST['cost'][$b] * $_REQUEST['count'][$b] * (100 - $_REQUEST['action'][$b]) / 100;
       // print_r($summaProduct_r);

        $textTable .= BEGIN_ROW. (++$i) . COL_LINE . $_REQUEST['name'][$b] . COL_LINE . $_REQUEST['cost'][$b]
            . COL_LINE . $_REQUEST['count'][$b] . COL_LINE . $summaProduct_r.COL_LINE . ' '.COL_LINE .$_REQUEST['action'][$b] .END_ROW;
        $summa += $summaProduct_r ;

    }
}
$textTable .= BEGIN_ROW . ' '. COL_LINE. "Общая сумма заказа " . COL_LINE . ' '. COL_LINE.' '. COL_LINE.$summa . END_ROW;


$temp = 'textTable';

echo  $$temp;

?>
    </tbody>
</table>

