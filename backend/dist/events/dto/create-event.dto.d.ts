import { Ticket } from 'src/ticket/ticket.entity';
export declare class CreateEventDto {
    eventId: string;
    eventTitle: string;
    eventDate: Date;
    eventCity: string;
    tickets: Ticket[];
}
