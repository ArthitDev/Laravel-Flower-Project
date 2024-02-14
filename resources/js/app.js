import "./bootstrap";
import "flowbite";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.querySelectorAll('.overlay').forEach((overlay) => {
    const tooltip = overlay.querySelector('.tooltip');
    overlay.addEventListener('mouseenter', () => {
        tooltip.classList.remove('hidden');
        tooltip.classList.add('opacity-100');
    });
    overlay.addEventListener('mouseleave', () => {
        tooltip.classList.remove('opacity-100');
        tooltip.classList.add('hidden');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    const modal = document.getElementById("post-modal");
    const modalTitle = document.getElementById("modal-title");
    const modalContent = document.getElementById("modal-content");
    const modalImage = document.getElementById("modal-image");
    const modalType = document.getElementById("modal-type");
    const closeModalButton = document.getElementById("close-modal");
    const iconCloseModalButton = document.getElementById("icon-close-modal");

    cards.forEach((card) => {
        card.addEventListener("click", function () {
            // เมื่อคลิกที่การ์ด
            const type = card.getAttribute("data-type");
            const id = card.getAttribute("data-id");
            const title = card.querySelector(".text-4xl").textContent;
            const content = card.querySelector(".text-content").textContent;
            const imageUrl = card.querySelector("img").src; // รับ URL ของรูปภาพ

            modalType.textContent = '';
            modalType.classList.remove('bg-red-500', 'bg-blue-500', 'bg-white');

            // แสดงข้อมูลใน Modal
            modalTitle.textContent = title;
            modalContent.textContent = content;
            modalImage.src = imageUrl;

            // เพิ่มคลาส CSS และสีตามค่า "type" ที่คุณได้รับจากการ์ด
            modalType.textContent = type;
            if (type === 'ฤดูร้อน') {
                modalType.classList.add('bg-red-500');
            } else if (type === 'ฤดูฝน') {
                modalType.classList.add('bg-blue-500');
            } else if (type === 'ฤดูหนาว') {
                modalType.classList.add('bg-white');
            }

            // แสดง Modal
            modal.classList.remove("hidden");

            // ปิด Modal เมื่อคลิกที่ปุ่ม Close
            closeModalButton.addEventListener("click", function () {
                modal.classList.add("hidden");
            });
            iconCloseModalButton.addEventListener("click", function () {
                modal.classList.add("hidden");
            });
        });
    });
});


















