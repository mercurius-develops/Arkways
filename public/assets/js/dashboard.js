$(function () {

  // =====================================
  // Earning
  // =====================================

  var earning = {
    chart: {
      id: "sparkline3",
      type: "area",
      height: 150,
      sparkline: {
        enabled: true,
      },
      group: "sparklines",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    series: [
      {
        name: "Sales",
        color: "#77cbb9",
        data: Object.values(sales)
      },
    ],
    stroke: {
      curve: "smooth",
      width: 2,
    },
    fill: {
      colors: ["#77cbb9"],
      type: "solid",
      opacity: 0.05,
    },

    markers: {
      size: 0,
    },
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: true,
        position: "right",
      },
      x: {
        show: false,
      },
    },
  };
  new ApexCharts(document.querySelector("#earning"), earning).render();
})

const searchButton = document.querySelector("#searchBtn");
const addTransBtn = document.querySelector('#addTrans');
const closeButton = document.getElementById('searchClose');
const addTransModal = document.getElementById('addTransModal');
const addButton = document.getElementById('addClose');


addButton.addEventListener('click', () => addTransModal.classList.remove('scale-100'))
addTransBtn.addEventListener('click', () => addTransModal.classList.add('scale-100'))



