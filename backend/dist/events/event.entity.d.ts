import { Ticket } from "src/ticket/ticket.entity";
export declare class Event {
    eventId: string;
    eventTitle: string;
    eventDate: Date;
    eventCity: string;
    tickets: Ticket[];
}
