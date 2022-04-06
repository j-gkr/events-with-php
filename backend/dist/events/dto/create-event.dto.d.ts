import { Ticket } from "src/ticket/ticket.entity";
export declare class CreateEventDto {
    eventId: string;
    readonly eventTitle: string;
    readonly eventDate: Date;
    readonly eventCity: string;
    readonly tickets: Ticket[];
}
