<?php get_header(); ?>

<h1 classs="title">お問い合わせありがとうございます</h1>
<p>ご記入いただいた情報は無事送信されました</p>
<a href="http://localhost/wordpress/">TOPページへ戻る</a>

<script>
	foreach ($results as $result) {
	$post_id = $result->ID;

	// wp_postmeta テーブルから $post_idに該当し、かつ、meta_key: _mail の行を抽出
	$sql = "SELECT * FROM wp_postmeta WHERE post_id = $post_id AND meta_key = '_mail'";
	$results2 = $wpdb->get_results($sql);

	foreach ($results2 as $result2) {
		$meta_value = $result2->meta_value;
		// 値をデシリアライズ
		$wpcf7_data_mail = unserialize($meta_value);

		// 以下では、とりあえず画面にキーと値をCSV形式で表示する。
		// 1行目にキー情報表示
		if (!$cnt) {
			$str .= 'post_title';
			foreach ($wpcf7_data_mail as $key => $value) {
				$str .= ',' . $key;
			}
			$str .= "<br>\n";
		}

		// 各カラムの値を表示
		$str .= $post_title;
		foreach ($wpcf7_data_mail as $key => $value) {
			$str .= ',' . '"' . $value . '"';
		}
		break;
	}
	$str .= "<br>\n";
	$cnt++;
}

echo $str;

</script>





<?php get_footer(); ?>