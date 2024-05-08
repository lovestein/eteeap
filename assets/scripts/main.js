// Enable Tooltips
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// Class Style For Alerts
const successMessage = "text-bg-success";
const failMessage = "text-bg-danger";
const warningMessage = "text-bg-warning";

$("#testAlertifyBtn").on("click", function () {
  console.log("Button clicked");
  alertify.set("notifier", "position", "top-right");
  alertify.success("test");
});
