<?php
$response = json_decode($val->response, true);
$error = (!is_array($response['original'])) ? 'error' : '';
?>

<tr class="row {{$error}}" onclick="expand(this)" data-next="details{{$val->id}}">
    <td>{{$val->id}}</td>
    <td>{{$val->created_at}}</td>
    <td>{{$val->url}}</td>
    <td>{{$val->duration}}</td>
    <td>
        <?php
        if (strlen($val->request_payload) > 100) {
            echo substr($val->request_payload, 0, 100);
        } else {
            echo $val->request_payload;
        }
        ?>
    </td>
    <td>
        <?php
        $response = json_decode($val->response, true);
        $res = json_encode($response['original']);
        if (strlen($res) > 100) {
            echo $str = substr($res, 0, 100) . '...';
        } else {
            echo $res;
        }
        ?>
    </td>
</tr>
<tr class="details" id="details{{$val->id}}" style="display: none;">
    <td colspan="7" >
        <span>
            <strong>URL: </strong>
            {{$val->url}}<br>
            <strong>Header:</strong>
            <pre><?php echo json_encode(json_decode($val->header, true), JSON_PRETTY_PRINT); ?></pre>
            <strong>Route:</strong>
            <pre><?php echo json_encode(json_decode($val->route_details, true), JSON_PRETTY_PRINT); ?></pre>
            <strong>Request:</strong>
            <pre><?php echo json_encode(json_decode($val->request_payload, true), JSON_PRETTY_PRINT); ?></pre>
            <strong>Response:</strong>
            <?php
            $response = json_decode($val->response, true);
            if (is_array($response['original'])) {
                echo '<pre>' . json_encode($response['original'], JSON_PRETTY_PRINT) . '</pre>';
            } else {
                print_r(stripslashes(str_replace('\n', '', $response['original'])));
            }
            ?>
        </span>
    </td>
</tr>