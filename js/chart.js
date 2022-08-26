new Chart(document.getElementById("bar-chart-grouped"), {
  type: 'bar',
  data: {
    labels: ["Duo Koto", "Guguak", "Baiang"],
    datasets: [
      {
        label: "Laki-laki",
        backgroundColor: "#3E95CD",
        data: [575,646,928]
      }, {
        label: "Perempuan",
        backgroundColor: "#A53774",
        data: [816,644,921]
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Jumlah laki-laki dan perempuan per jorong',
      fontSize : 18
    }
  }
});

new Chart(document.getElementById("pie-chart"), {
  type: 'pie',
  data: {
    labels: ["Duo Koto", "Guguak", "Baiang"],
    datasets: [{
      label: "Population (millions)",
      backgroundColor: ["#3E95CD", "#A53774","#7175BF"],
      data: [1391,1290,1849]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Jumlah persebaran penduduk per jorong',
      fontSize : 18
    }
  }
});