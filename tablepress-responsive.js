document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".tablepress").forEach(function (table) {
    let headers = Array.from(table.querySelectorAll("thead th")).map(th => th.textContent.trim());

    table.querySelectorAll("tbody tr").forEach(function (row) {
      row.querySelectorAll("td").forEach(function (cell, i) {
        cell.setAttribute("data-label", headers[i] || "");
      });
    });
  });
});
