<script src="Assets/js/jquery-2.2.3.min.js"></script>


<table>
    <tr>
        <td>
            <select name="province" id="province">
                <option>-กรุณาเลือกรายการ-</option>
                <?php while ($province = $this->provinces->fetch()): ?>
                    <option
                        value="<?php echo $province->province_id; ?>"><?php echo $province->province_name; ?></option>
                <?php endwhile; ?>
            </select>
        </td>
        <td>
            <select name="amphur" id="amphur">
                <option>-กรุณาเลือกจังหวัด</option>
            </select>
        </td>
        <td>
            <select name="district" id="district">
                <option>-กรุณาเลือกอำเภอ-</option>
            </select>
        </td>
    </tr>
</table>

<script>
    $(document).ready(function () {
        $(document).on('change', '#province', function (e) {
            e.preventDefault();
            if ($('#province').val() > 0) {
                validateProvince();
                var provinceId = $('#province').val();
                callBackAjax('province_id', provinceId);
            } else {
                validateProvince();
            }
        });

        $(document).on('change', '#amphur', function (e) {
            e.preventDefault();

            if ($('#amphur').val() > 0) {
                validateAmphur();
                var amphurId = $('#amphur').val();
                callBackAjax('amphur_id', amphurId);
            } else {
                validateAmphur();
            }
        });

        function validateAll() {
            $('#amphur').empty();
            $('#district').empty();

            $('#amphur').html('<option>-กรุณาเลือกจังหวัด-</option>');
            $('#district').html('<option>-กรุณาเลือกจอำเภอ-</option>');
        }

        function validateProvince() {
            $('#amphur').empty();
            $('#district').empty();

            $('#amphur').html('<option>-กรุณารายการ-</option>');
            $('#district').html('<option>-กรุณาเลือกจอำเภอ-</option>');
        }

        function validateAmphur() {
            $('#district').empty();
            $('#district').html('<option>-กรุณารายการ-</option>');
        }

        function callBackAjax(key, value) {
            var action = key;

            $.ajax({
                'type': 'POST',
                'url': '?ProvinceDistrict',
                'cache': false,
                'data': {'action': key, 'value': value},
                'success': function (result) {
                    if (action === 'province_id') {
                        $('#amphur').append(result);
                    }

                    if (action === 'amphur_id') {
                        $('#district').append(result);
                    }
                }
            });
        }


    });
</script>

