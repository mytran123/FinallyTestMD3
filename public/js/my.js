// $(document).ready(function () {
//     let url = location.origin;
//
//     function showStaffHtml(res) {
//         let staffs = res.data;
//         let html = "";
//         for (let i = 0; i < staffs.length; i++) {
//             html += "<tr>";
//             html += "<td>";
//             html += staffs[i].id
//             html += "</td>";
//             html += "<td>";
//             html += staffs[i].group
//             html += "</td>";
//             html += "<td>";
//             html += staffs[i].name
//             html += "</td>";
//             html += "<td>";
//             html += staffs[i].gerder
//             html += "</td>";
//             html += "<td>";
//             html += staffs[i].phone
//             html += "</td>";
//             html += "</tr>";
//         }
//         $('#list-staff').html(html)
//     }
//
//
//     $('body').on("keyup", "#searchStaff", function () {
//         let keystaff = $(this).val()
//         $.ajax({
//             url: url + "/staffs/search",
//             method: "GET",
//             type: 'json',
//             data: {
//                 keystaff: keystaff
//             },
//             success: function (res) {
//                 showStaffHtml(res)
//             }
//         })
//     })
// }
