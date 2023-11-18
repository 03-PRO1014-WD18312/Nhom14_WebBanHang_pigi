$(document).ready(function () {
  $("#btnSave").click((e) => {
    //cancel submit
    e.preventDefault();
    $formData = $("#frmNewsCategories")
      .serializeArray()
      .reduce(function (obj, item) {
        obj[item.name] = item.value;
        return obj;
      }, {});

    //Cần validate data rồi mới submit
    $validate_ok = true;

    if (!$validate_ok) {
      return;
    }

    $.post(
      base_url + "/blog/categories/save",
      $formData,
      function (data) {
        if (data.success) {
          Swal.fire({
            title: "Success",
            text: "Lưu data thành công!",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "OK",
          }).then((result) => {
            window.location.href = base_url + "/blog/categories";
          });
        } else {
          Swal.fire({
            type: "error",
            title: "Oops...",
            text: "Lưu data không thành công!",
          });
          // Lấy dữ liệu error ra rồi hiển thị thông báo
          // data.error
        }
      },
      "json"
    );
  });

  $(".btnDelete").click(function () {
    var id = $(this).data("row");
    Swal.fire({
      title: "Are you sure?",
      text: "Bạn có muốn xóa item này không?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        removeItems([id]);
      }
    });
  });

  //Xóa một hoặc nhiều item
  function removeItems(ids) {
    console.log("ids", ids);
    $.post(
      base_url + "/blog/categories/delete",
      //{ids: ids} = {ids} vì tên biến trùng tên key của json
      { ids },
      function (data) {
        if (data.success) {
          Swal.fire({
            title: "Success",
            text: "Xóa thành công!",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "OK",
          }).then((result) => {
            //refresh lại trang sau khi xóa
            location.reload();
          });
        } else {
          Swal.fire({
            type: "error",
            title: "Oops...",
            text: "Xóa không thành công!",
          });
        }
      },
      "json"
    );
  }

  $("#txtTitle").on("blur", function () {
    //get slug value
    let slug = $("#txtSlug").val().trim();
    if (!slug) {
      let newSlug = convertTextToSlug($("#txtTitle").val().trim());
      $("#txtSlug").val(newSlug);
    }
  });
  $("#txtSlug").on("blur", function () {
    //get slug value
    let slug = $("#txtSlug").val().trim();
    let newSlug = convertTextToSlug(slug);
    $("#txtSlug").val(newSlug);
  });
});
