<?php
if( isset( $_POST[ 'Upload' ] ) ) {
    $target_path = basename( $_FILES[ 'uploaded' ][ 'name' ] );
    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
    $uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
    $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
    if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
        ( $uploaded_size < 100000 ) ) {
			if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
				echo "<pre>ͼƬ�ϴ�ʧ��</pre>";
			}
			else {
				echo "<pre>{$target_path} ͼƬ�ϴ��ɹ���</pre>";
			}
    }
    else {
        echo "<pre>ֻ�����ϴ�jpg����png��ʽ��ͼƬ�ļ�,���ļ���С���ܳ���100k</pre>";
    }
}
?>