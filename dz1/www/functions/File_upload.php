<?php
class File_Upl
{
    public function File_upload($field)
    {
        if (empty($_FILES))
            return false;

        if (0 != $_FILES[$field]['error'])
            return false;

        if (is_uploaded_file($_FILES[$field]['tmp_name'])) {
            $res = move_uploaded_file($_FILES[$field]['tmp_name'], __DIR__ . '/../acls/' . $_FILES[$field]['name']);
            if (!$res) {
                return false;
            } else {
                return '/acls/' . $_FILES[$field]['name'];
            }
        }
        return false;
    }
}