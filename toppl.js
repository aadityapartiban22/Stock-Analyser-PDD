const API_KEY = "E1LWVJIJFLRA9VWJ";
async function fetchData() {
  const url = `https://www.alphavantage.co/query?function=TOP_GAINERS_LOSERS&apikey=${API_KEY}`;
  try {
    const response = await fetch(url);
    if (!response.ok) throw new Error("Network response was not ok");
    const data = await response.json();
    populateTable(data.top_gainers, "top-gainers-table");
    populateTable(data.top_losers, "top-losers-table");
  } catch (error) {
    console.error("Fetch error:", error);
  }
}

function populateTable(data, tableId) {
  const tableBody = document.querySelector(`#${tableId} tbody`);
  tableBody.innerHTML = ""; // Clear existing rows

  data.forEach((item) => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.ticker}</td>
      <td>${item.price}</td>
      <td>${item.change_amount}</td>
      <td>${item.change_percentage}</td>
      <td>${item.volume}</td>
    `;
    tableBody.appendChild(row);
  });
}

fetchData();
