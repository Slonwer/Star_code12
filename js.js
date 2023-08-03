const data = [
    ["Tiger Nixon", "System Architect", "Edinburgh", "61", "2011-04-25", "$320,800"],
    ["Garrett Winters", "Accountant", "Tokyo", "63", "2011-07-25", "$170,750"],
    ["Ashton Cox", "Junior Technical Author", "San Francisco", "66", "2009-01-12", "$86,000"],
    ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "22", "2012-03-29", "$433,060"],
    ["Airi Satou", "Accountant", "Tokyo", "33", "2008-11-28", "$162,700"],
    ["Brielle Williamson", "Integration Specialist", "New York", "61", "2012-12-02", "$372,000"],
    // Rest of the data...
  ];
  
  const table = document.createElement('table');
  const thead = document.createElement('thead');
  const tbody = document.createElement('tbody');
  
  const headers = ["Name", "Position", "Office", "Age", "Start Date", "Salary"];
  const headerRow = document.createElement('tr');
  
  headers.forEach(headerText => {
    const th = document.createElement('th');
    th.textContent = headerText;
    headerRow.appendChild(th);
  });
  
  thead.appendChild(headerRow);
  table.appendChild(thead);
  
  data.forEach(rowData => {
    const row = document.createElement('tr');
  
    rowData.forEach(cellData => {
      const cell = document.createElement('td');
      cell.textContent = cellData;
      row.appendChild(cell);
    });
  
    tbody.appendChild(row);
  });
  
  table.appendChild(tbody);
  document.body.appendChild(table);
  