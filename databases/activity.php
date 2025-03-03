<?php

function getActivity(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from activity';
    $result = $conn->query($sql);
    return $result;
}
function getactivitybyid($id): array|bool
{
    $conn = getConnection();
    $sql = 'select * from activity where activity_id =  ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_assoc();

    return $result;
}
function getAdminCreateActivitybyid($id): array|bool
{
    $conn = getConnection();
    $sql = 'select * from activity where uid =  ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_all(MYSQLI_ASSOC);

    // return $result;
}

