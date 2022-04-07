import { Ticket } from "src/ticket/ticket.entity";

/**
 * Event entity
 * (Could be extended with annotations to save in database)
 */
export class Event {

    eventId: string;

    eventTitle: string;

    eventDate: Date;

    eventCity: string;

    tickets: Ticket[];
}